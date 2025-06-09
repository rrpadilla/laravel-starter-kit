export default (Alpine) => ({
    mode: Alpine.$persist('system').as('appearance'),
    _mediaQuery: window.matchMedia('(prefers-color-scheme: dark)'),
    _bound: false,

    get isDark() {
        return this.mode === 'dark' || (this.mode === 'system' && this._mediaQuery.matches);
    },

    apply(mode = null) {
        const value = mode ?? this.mode;
        const isDark = value === 'dark' || (value === 'system' && this._mediaQuery.matches);
        if (isDark) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    },

    init(mode = null) {
        this.apply(mode);

        if (!this._bound) {
            this._mediaQuery.addEventListener('change', () => {
                if (this.mode === 'system') this.apply('system');
            });
            this._bound = true;
        }
    },

    set(value) {
        this.mode = value;
        this.apply(value);
    },

    toggle() {
        this.set(this.mode === 'dark' ? 'light' : 'dark');
    },
});
