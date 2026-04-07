import "./bootstrap";
import Alpine from "alpinejs";

window.Alpine = Alpine;
Alpine.store("auth", {
    isAuthenticated: false,
    showAuthModal: false,

    redirect(url) {
        if (this.isAuthenticated) {
            window.location.href = url;
        } else {
            this.showAuthModal = true;
        }
    },
});
