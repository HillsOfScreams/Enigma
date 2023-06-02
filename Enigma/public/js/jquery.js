document.addEventListener("DOMContentLoaded", function() {
    // Make side menu show up
    document.querySelector(".trigger").addEventListener("click", function() {
      document.querySelector(".overlay").style.display = "block";
      document.querySelector(".menuWrap").style.display = "block";
      document.querySelector(".menu").style.opacity = "1";
      document.querySelector(".menu").style.left = "0px";
    });
  
    // Make config menu show up
    document.querySelector(".settings").addEventListener("click", function() {
      document.querySelector(".config").style.opacity = "1";
      document.querySelector(".config").style.right = "0px";
      document.querySelector(".menuWrap").style.display = "none";
      document.querySelector(".menu").style.opacity = "0";
      document.querySelector(".menu").style.left = "-320px";
    });
  
    // Show/Hide the other notification options
    document.querySelector(".deskNotif").addEventListener("click", function() {
      const showSName = document.querySelector(".showSName");
      const showPreview = document.querySelector(".showPreview");
      const playSounds = document.querySelector(".playSounds");
      if (showSName.style.display === "none") {
        showSName.style.display = "block";
        showPreview.style.display = "block";
        playSounds.style.display = "block";
      } else {
        showSName.style.display = "none";
        showPreview.style.display = "none";
        playSounds.style.display = "none";
      }
    });
  
    // Close all overlay elements
    document.querySelector(".overlay").addEventListener("click", function() {
      document.querySelector(".overlay").style.display = "none";
      document.querySelector(".menuWrap").style.display = "none";
      document.querySelector(".menu").style.opacity = "0";
      document.querySelector(".menu").style.left = "-320px";
      document.querySelector(".config").style.opacity = "0";
      document.querySelector(".config").style.right = "-200vw";
    });
  
    // This also hides everything when people press ESC
    document.addEventListener("keydown", function(e) {
      if (e.keyCode == 27) {
        document.querySelector(".overlay").style.display = "none";
        document.querySelector(".menuWrap").style.display = "none";
        document.querySelector(".menu").style.opacity = "0";
        document.querySelector(".menu").style.left = "-320px";
        document.querySelector(".config").style.opacity = "0";
        document.querySelector(".config").style.right = "-200vw";
      }
    });
  
    // Enable/Disable night mode
    document.querySelector(".DarkThemeTrigger").addEventListener("click", function() {
      document.body.classList.toggle("DarkTheme");
    });
  
    // Small conversation menu
    document.querySelector(".otherOptions").addEventListener("click", function() {
      document.querySelector(".moreMenu").slideToggle("fast");
    });
  
    // Clicking the search button from the conversation focuses the search bar outside it, as on desktop
    document.querySelector(".search").addEventListener("click", function() {
      document.querySelector(".searchChats").focus();
    });
  
    // Show or Hide Emoji Panel
    document.querySelector(".emoji").addEventListener("click", function() {
      document.querySelector(".emojiBar").style.display = "block";
    });
  
    // If the user clicks the conversation or the type panel, hide the emoji panel
    document.querySelector(".convHistory, .replyMessage").addEventListener("click", function() {
      document.querySelector(".emojiBar").style.display = "none";
    });
  });
  