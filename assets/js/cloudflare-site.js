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

  toggle.addEventListener("click", () => {
    const isOpen = card.classList.contains("is-open");

    packageCards.forEach((item) => {
      item.classList.remove("is-open");
      const itemToggle = item.querySelector("[data-package-toggle]");

      if (itemToggle) {
        itemToggle.setAttribute("aria-expanded", "false");
      }
    });

    if (!isOpen) {
      card.classList.add("is-open");
      toggle.setAttribute("aria-expanded", "true");
    }
  });
});
