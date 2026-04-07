import "./bootstrap";
import Alpine from "alpinejs";

// 1️⃣ Define store FIRST — before anything else
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

// 2️⃣ Expose Alpine globally
window.Alpine = Alpine;

// 3️⃣ DON'T call Alpine.start() — Livewire v3 handles this automatically
