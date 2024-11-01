const apiKey = 'AIzaSyDMT4IDVlvN_h0vIoI1GkZOvWAVVe9zf1o'; // Replace with your actual API key
const videoId = 'RDdV_FeXAcvaY'; // Replace with the desired video ID

fetch(`https://www.googleapis.com/youtube/v3/videos?id=${videoId}&key=${apiKey}&part=snippet,contentDetails`)
    .then(response => response.json())
    .then(data => {
        console.log(data);
        // Process your data here
    })
    .catch(error => console.error('Error:', error));
