export default () => ({
    open: false,
    toggle() {
        this.open = !this.open
    },
    close() {
        this.open = false
    },
    openDialog() {
        this.open = true
    }
});
