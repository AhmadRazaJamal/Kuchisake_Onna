<html>

<style>

#loginVideo{
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

.answer{
    position: relative;
    left: 18vw; 
    top: 82.5vh ; 
    color: transparent ; 
    text-shadow: 0 0 1px rgba(255, 0, 0, 0.788);
    font-family: 'Denk One', sans-serif;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 2.3em;
    position: absolute ; 
    margin-left: -180px;
    animation-name: horror;
    animation-duration: 5s;
    animation-iteration-count: infinite ;
}

@keyframes horror{ /*Animation effect for text*/ 

0% {text-shadow: 0 0 10px rgba(255, 0, 0, 0.1);; left: 19vw; top: 52.5vh;}
5% {text-shadow: 0 0 5px rgba(255, 0, 0, 0.2);; left: 18vw; top: 52.5vh;}
10% {text-shadow: 0 0 5px rgba(255, 0, 0, 0.3);; left: 18vw; top: 53vh;}
15% {text-shadow: 0 0 5px rgba(255, 0, 0, 0.4);; left: 19vw; top: 53.5vh;}
16% {text-shadow: 0 0 10px rgba(255, 0, 0, 0.5);; left: 17vw; top: 52vh;}
17% {text-shadow: 0 0 10px rgba(255, 0, 0, 0.6);; left: 18vw; top: 52.5vh;}
18% {text-shadow: 0 0 10px rgba(255, 0, 0, 0.7);; left: 19vw; top: 52.56vh;}
19% {text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);; left: 10vw; top: 52.5vh;}
20% {text-shadow: 0 0 10px rgba(255, 0, 0, 0.9);; left: 19vw; top: 53vh;}
25% {text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);; left: 18vw; top: 53.5vh;}
30% {text-shadow: 0 0 10px rgba(255, 0, 0, 1);; left: 19vw; top: 52vh;}
34% {text-shadow: 0 0 10px rgba(255, 0, 0, 0.6);; left: 10vw; top: 52.5vh;}
35% {text-shadow: 0 0 10px rgba(255, 0, 0, 0.5);; left: 17vw; top: 52.5vh;}
40% {text-shadow: 0 0 5px rgba(255, 0, 0, 0.4);; left: 16vw; top: 52.5vh;}
50% {text-shadow: 0 0 5px rgba(255, 0, 0, 0.8);; left: 16vw; top: 53vh;}
55% {text-shadow: 0 0 5px rgba(255, 0, 0, 0.2);; left: 17vw; top: 53vh;}
56% {text-shadow: 0 0 10px rgba(255, 0, 0, 0.1);; left: 17vw; top: 53.5vh;}
57% {text-shadow: 0 0 10px rgba(255, 0, 0, 0.2);; left: 18vw; top: 52vh;}
60% {text-shadow: 0 0 10px rgba(255, 0, 0, 0.4);; left: 19vw; top: 52vh;}
65% {text-shadow: 0 0 10px rgba(255, 0, 0, 0.5);; left: 19vw; top: 52vh;}
70% {text-shadow: 0 0 5px rgba(255, 0, 0, 1);; left: 19.5vw; top: 53vh;}
80% {text-shadow: 0 0 5px rgba(255, 0, 0, 0.7);; left: 10vw; top: 53.5vh;}
90% {text-shadow: 0 0 5px rgba(255, 0, 0, 0.6);; left: 18vw; top: 52vh;}
90% {text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);; left: 17vw; top: 52vh;}
100% {text-shadow: 0 0 10px rgba(255, 0, 0, 1);; left: 17vw; top: 52.5vh;}

}
</style>

<body>

    <video loop muted autoplay id='loginVideo'>
          <source src='indexPage.mp4' type='video/mp4'> <!--- Credits to Videvo -->
    </video>
 
    <label class='answer'><b>Life embraced, left confused, hastened to live </b></label>
 
 </body>


</html>