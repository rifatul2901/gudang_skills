// save-button.js
document.addEventListener("DOMContentLoaded", function () {
  const saveButtons = document.querySelectorAll(".btn-save");

  saveButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const levelId = button.closest(".image-box").id;
      alert(`Disimpan: ${levelId}`);
      // TODO: Ganti alert ini dengan request ke backend jika perlu
    });
  });
});
