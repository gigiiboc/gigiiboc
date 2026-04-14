/**
 * vite base(/gigiiboc/)에 맞추기 위해 public 안 정적 파일의
 * 루트 절대 경로에 base 접두를 붙입니다.
 *
 * - "/note/...     → "/gigiiboc/portfolio/...   (실제 파일은 public/portfolio/ 아래)
 * - "/portfolio/... → "/gigiiboc/portfolio/...
 * - url(/note/ 등도 동일 규칙
 *
 * 이미 "/gigiiboc/ 가 붙은 경로는 건드리지 않도록, 치환은 원문 패턴만 대상으로 합니다.
 */
import fs from 'node:fs'
import path from 'node:path'
import { fileURLToPath } from 'node:url'

const __dirname = path.dirname(fileURLToPath(import.meta.url))
const ROOT = path.resolve(__dirname, '..')
const PUBLIC = path.join(ROOT, 'public')
const EXTS = new Set(['.html', '.htm', '.php', '.css'])

function walk(dir, out = []) {
  for (const name of fs.readdirSync(dir, { withFileTypes: true })) {
    const p = path.join(dir, name.name)
    if (name.isDirectory()) walk(p, out)
    else if (EXTS.has(path.extname(name.name).toLowerCase())) out.push(p)
  }
  return out
}

function patchContent(s) {
  return s
    .replaceAll('"/note/', '"/gigiiboc/portfolio/')
    .replaceAll("'/note/", "'/gigiiboc/portfolio/")
    .replaceAll('url(/note/', 'url(/gigiiboc/portfolio/')
    .replaceAll('url("/note/', 'url("/gigiiboc/portfolio/')
    .replaceAll("url('/note/", "url('/gigiiboc/portfolio/")
    .replaceAll('"/portfolio/', '"/gigiiboc/portfolio/')
    .replaceAll("'/portfolio/", "'/gigiiboc/portfolio/")
    .replaceAll('url(/portfolio/', 'url(/gigiiboc/portfolio/')
    .replaceAll('url("/portfolio/', 'url("/gigiiboc/portfolio/')
    .replaceAll("url('/portfolio/", "url('/gigiiboc/portfolio/")
}

const files = walk(PUBLIC)
const changed = []

for (const file of files) {
  const before = fs.readFileSync(file, 'utf8')
  const after = patchContent(before)
  if (after !== before) {
    fs.writeFileSync(file, after)
    changed.push(path.relative(ROOT, file))
  }
}

console.log(`patched ${changed.length} file(s) under public/`)
for (const f of changed.sort()) console.log('  ', f)
