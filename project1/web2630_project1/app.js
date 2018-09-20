new Vue({
  el: '#app',
  data: {
      compWins: 0,
      userWins: 0,
      highScore: 10,
      showGame: true,
      resultLog: [],
      highScoreReached: false,

  },
  methods: {

      //start game
      startGame: function(){

          this.showGame = !this.showGame;
      },

      //restart game
      restart: function(){
          this.userWins = 0;
          this.compWins = 0;
          this.showGame = !this.showGame;
          this.highScore  = 0;
          this.resultLog = [];
          this.highScoreReached = !this.highScoreReached;
      },

      rockChoice: function(){
          let computerChoice = this.compChoice();

      },

      paperChoice: function(){
          let computerChoice = this.compChoice();

      },

      scissorChoice: function(){
          let computerChoice = this.compChoice();

      },

      compChoice: function(){
          let computerChoice = Math.random();


          if(computerChoice < 0.34){
              computerChoice = "rock";
          }else if(computerChoice > 0.34 && computerChoice < 0.67){
              computerChoice = "paper"
          }else{
              computerChoice = "scissors"
          }
      },


      //compare individual games
      compare: function(userChoice,computerChoice){
          if (userChoice === "rock") {
              if (computerChoice === "paper") {
                  this.resultLog.unshift({
                      compWin: true,
                      tie: false,
                      text: "COMPUTER CHOSE PAPER | PAPER BEATS ROCK | COMPUTER WINS!"
                  });
                  this.compWins++;
              } else if (computerChoice === "scissors") {
                  this.resultLog.unshift({
                      compWin: false,
                      tie: false,
                      text: "COMPUTER CHOSE SCISSORS | ROCK BEATS SCISSORS | YOU WIN!"
                  });
                  this.userWins++;
              } else {
                  this.resultLog.unshift({
                      compWin: false,
                      tie: true,
                      text: "COMPUTER CHOSE ROCK | YOU'VE TIED!"
                  });
              }
          } else if (userChoice === "paper") {
              if (computerChoice === "scissors") {
                  this.resultLog.unshift({
                      compWin: true,
                      tie: false,
                      text: "COMPUTER CHOSE SCISSORS | SCISSORS BEATS PAPER | COMPUTER WINS!"
                  });
                  this.compWins++;
              } else if (computerChoice === "rock") {
                  this.resultLog.unshift({
                      compWin: false,
                      tie: false,
                      text: "COMPUTER CHOSE ROCK | PAPER BEATS ROCK | YOU WIN!"
                  });
                  this.userWins++;
              } else {
                  this.resultLog.unshift({
                      compWin: false,
                      tie: true,
                      text: "COMPUTER CHOSE PAPER | YOU'VE TIED!"
                  });
              }
          } else {
              if (computerChoice === "rock") {
                  this.resultLog.unshift({
                      compWin: true,
                      tie: false,
                      text: "COMPUTER CHOSE ROCK | ROCK BEATS SCISSORS | COMPUTER WINS!"
                  });
                  this.compWins++;
              } else if (computerChoice === "paper") {
                  this.resultLog.unshift({
                      compWin: false,
                      tie: false,
                      text: "COMPUTER CHOSE PAPER | SCISSORS BEATS PAPER | YOU WIN!"
                  });
                  this.userWins++;
              } else {
                  this.resultLog.unshift({
                      compWin: false,
                      tie: true,
                      text: "COMPUTER CHOSE SCISSORS | YOU'VE TIED!"
                  });
              }
          }
      },

      //compare if comp won or user
      gamesResults: function(highScore){
          if(this.highScore == this.compWins || this.highScore == this.userWins){
              if(this.compWins > this.userWins){

              }else {

              }

              this.highScore = 0;
              this.compWins = 0;
              this.userWins = 0;
          }
      }





  }
});