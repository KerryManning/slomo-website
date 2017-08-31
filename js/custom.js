// Video
var video = document.getElementById("video");

// Mute Button
var muteButton = document.getElementById("mute");

// Icon
var muteIcon = document.getElementById("icon");


// Event listener for the mute button
muteButton.addEventListener("click", function() {
  if (video.muted == false) {
    // Mute the video
    video.muted = true;

    // Update the button text
    //muteButton.innerHTML = "unmute";

    // Update the icon
    muteIcon.className = "fi-volume-strike";
  } 
  else {
    // Unmute the video
    video.muted = false;

    // Update the button text
    //muteButton.innerHTML = "mute";

    //Update the icon
    muteIcon.className = "fi-volume";
  }
});