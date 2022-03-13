// Main event handler
// ----------------------------------------------------------------------------
document.querySelector("body").addEventListener("click", function (e) {
  if (
    document.querySelector("#MainMenuList").classList.contains("flex") &&
    e.target.id !== "MainMenuList" &&
    e.target.id !== "MainMenuTrigger"
  )
    document.querySelector("#MainMenuList").classList.replace("flex", "hidden");
});
// -----------------------------------------------------------------------------

// Header menu toggler
// ------------------------------------------------------------
document
  .querySelector("#MainMenuTrigger")
  .addEventListener("click", function (e) {
    document.querySelector("#MainMenuList").classList.contains("flex")
      ? document
          .querySelector("#MainMenuList")
          .classList.replace("flex", "hidden")
      : document
          .querySelector("#MainMenuList")
          .classList.replace("hidden", "flex");
  });
// ------------------------------------------------------------
