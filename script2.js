const music = new Audio('audio/7.mp3');
const songs = [
    {
        id:"7",
        songName: `Agar Tum Sath Ho <br><div class="subtitle">Tamashaa</div>`,
        poster: "images/harsha.png",
    },
    {
        id:"8",
        songName: `Suna Hai <br><div class="subtitle">Neha Kakker</div>`,
        poster: "images/22.png",
    },
    {
        id:"9",
        songName: `Dilber <br><div class="subtitle">Satyameva Jayate</div>`,
        poster: "images/26.png",
    },
    {
        id:"10",
        songName: `Duniya <br><div class="subtitle">Luka Chuppi</div>`,
        poster: "images/25.png",
    },
    {
        id:"11",
        songName: `Lagdi Lahore Di <br><div class="subtitle">Street Dancer 3D</div>`,
        poster: "images/24.png",
    },
    {
        id:"12",
        songName: `Putt Jatt Da <br><div class="subtitle">Putt Jatt Da</div>`,
        poster: "images/23.png",
    },
]
Array.from(document.getElementsByClassName('box')).forEach((element, i)=>{
    element.getElementsByTagName('img')[0].src = songs[i].poster;
});

let index=0;

Array.from(document.getElementsByClassName('playListPlay')).forEach((e)=>{
    e.addEventListener('click',(e1) => {
        index=e1.target.id;
        music.src=`audio/${index}.mp3`;
        music.play();
    })
})
 