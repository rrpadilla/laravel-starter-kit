export default (Alpine) => ({
    mode: 'system', // 'light' | 'dark' | 'system'
    _mq: window.matchMedia('(prefers-color-scheme: dark)'),

    init() {
        try {
            this.mode = localStorage.getItem('appearance') ?? 'system';
        } catch (_) {}

        // Sync when OS preference changes and we're in system mode
        this._mq.addEventListener('change', (e) => {
            if (this.mode === 'system') this._apply(this.mode, e.matches);
        });
    },

    toggle() {
        const order = ['light', 'dark', 'system'];
        this.set(order[(order.indexOf(this.mode) + 1) % order.length]);
    },

    get isDark() {
        return (
            this.mode === 'dark' || (this.mode === 'system' && this._mq.matches)
        );
    },

    set(value) {
        if (value === this.mode) return;
        this.mode = value;
        this._apply(value);
    },

    _apply(value = this.mode, prefersDark = this._mq.matches) {
        const isDark = value === 'dark' || (value === 'system' && prefersDark);
        document.documentElement.classList.toggle('dark', isDark);

        // Persist the user's intent right after the visual update.
        try {
            localStorage.setItem('appearance', value);
        } catch (_) {}
    },
});
