new Vue({
  el: '#app',
  data: {
      compWins: 0,
      userWins: 0,
      highScore: 10,
      showGame: true,
      resultLog: [],

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
          this.resultLog = [];
      },

      rockChoice: function(){
          let computerChoice = this.compChoice();
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
          this.gamesWinner();
      },

      paperChoice: function(){
          let computerChoice = this.compChoice();
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
          this.gamesWinner();
      },

      scissorChoice: function(){
          let computerChoice = this.compChoice();
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
          this.gamesWinner();
      },

      //generate computer choice
      compChoice: function(){
          let computerChoice = Math.random();

          if(computerChoice < 0.34){
               return "rock";
          }else if(computerChoice > 0.34 && computerChoice < 0.67){
              return "paper";
          }else{
              return "scissors";
          }
      },

      //compare if comp won or user
      gamesWinner: function(){
          if(this.userWins === 10) {
              alert("You Won!");
              this.userWins = 0;
              this.compWins = 0;
              this.showGame = !this.showGame;
              this.resultLog = [];
          }
          else if(this.compWins === 10) {
              alert("Computer Wins! Sorry you Lose!");
              this.userWins = 0;
              this.compWins = 0;
              this.showGame = !this.showGame;
              this.resultLog = [];
          }

      }





  }
});