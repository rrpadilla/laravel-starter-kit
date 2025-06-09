export default (Alpine) => ({
    mobileBreakpoint: 768,
    isMobile: false,
    isOpen: Alpine.$persist(true).as('sidebarIsOpen'),
    openMobile: false,

    init() {
        const mql = window.matchMedia(`(max-width: ${this.mobileBreakpoint - 1}px)`);
        this.isMobile = mql.matches;
        mql.addEventListener('change', (e) => {
            Alpine.store('sidebar').isMobile = e.matches;
        });
    },

    toggle() {
        this.isOpen = !this.isOpen;
    },

    toggleMobile() {
        this.openMobile = !this.openMobile;
    },
});
