// JavaScript Document
function say(content)
{
   var Start = new SpeechSynthesisUtterance();
   Start.text = content;
   Start.lang = 'en-US';
   Start.rate = 1.1;
   Start.onend = function(event) {  }
   speechSynthesis.speak(Start);
}