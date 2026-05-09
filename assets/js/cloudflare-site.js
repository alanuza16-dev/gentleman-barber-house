const revealItems = document.querySelectorAll(".reveal");
const navButtons = document.querySelectorAll("[data-target]");
const packageCards = document.querySelectorAll("[data-package-card]");

if (revealItems.length > 0) {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.16 }
  );

  revealItems.forEach((item, index) => {
    item.style.transitionDelay = `${index * 70}ms`;
    observer.observe(item);
  });
}

navButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const targetId = button.dataset.target;
    const target = document.getElementById(targetId);

    if (!target) {
      return;
    }

    target.scrollIntoView({
      behavior: "smooth",
      block: "start",
    });

    window.history.replaceState({}, "", window.location.pathname);
  });
});

packageCards.forEach((card) => {
  const toggle = card.querySelector("[data-package-toggle]");

  if (!toggle) {
    return;
  }

  const openCard = () => {
    packageCards.forEach((item) => {
      item.classList.remove("is-open");
      const itemToggle = item.querySelector("[data-package-toggle]");

      if (itemToggle) {
        itemToggle.setAttribute("aria-expanded", "false");
      }
    });

    card.classList.add("is-open");
    toggle.setAttribute("aria-expanded", "true");
  };

  toggle.addEventListener("click", () => {
    const isOpen = card.classList.contains("is-open");

    if (isOpen) {
      card.classList.remove("is-open");
      toggle.setAttribute("aria-expanded", "false");
      return;
    }

    openCard();
  });

  card.addEventListener("mouseenter", () => {
    if (window.matchMedia("(hover: hover) and (pointer: fine)").matches) {
      openCard();
    }
  });
});
