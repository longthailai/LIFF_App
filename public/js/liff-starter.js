var myLiffId = '1654158517-n46wYMRg';
var myLiffApp = 'line://app/' + myLiffId;


/**
* Initialize LIFF
* @param {string} myLiffId The LIFF app ID of the selected element
*/
function initializeLiff(myLiffId) {
    liff.init({
            liffId: myLiffId
        })
        .then(() => {
            // start to use LIFF's api
            initializeApp();
        })
        .catch((err) => {
            //document.getElementById("liffAppContent").classList.add('hidden');
            //document.getElementById("liffInitErrorMessage").classList.remove('hidden');
            console.log(err);
        });
}

$(document).ready(function() {
  initializeLiff(myLiffId);
});
