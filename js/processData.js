// Read URL parameter
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const curImg = urlParams.get('curImg');
	const curCam = urlParams.get('curCam');
// Find out size of loaded image
    let tmpImage = new Image();
    tmpImage.src = curImg;
    tmpImage.onload = function() {
        console.log (tmpImage.width);
        imageWidth = tmpImage.width;
    }