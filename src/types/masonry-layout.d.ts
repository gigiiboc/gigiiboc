declare module 'masonry-layout' {
  export default class Masonry {
    constructor(element: Element | null, options?: Record<string, unknown>)
    layout(): this
    reloadItems(): this
    destroy(): void
  }
}
