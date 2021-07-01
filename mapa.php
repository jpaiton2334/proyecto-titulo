<style>
body {
  background-color: #1abc9c;
  font: 1em Helvetica;
}

#container {
  width: 840px;
  margin: 25px auto;
}

.whysign {
  float: left;
  background-color: white;
  width: 480px;
  height: 347px;
  border-radius: 0 5px 5px 0;
  padding-top: 20px;
  padding-right: 20px;
}

.signup {
  float: left;
  width: 300px;
  padding: 30px 20px;
  background-color: white;
  text-align: center;
  border-radius: 5px 0 0 5px;
}

[type=text] {
  display: block;
  margin: 0 auto;
  width: 80%;
  border: 0;
  border-bottom: 1px solid rgba(0,0,0,.2);
  height: 45px;
  line-height: 45px;  
  margin-bottom: 10px;
  font-size: 1em;
  color: rgba(0,0,0,.4);
}

[type=submit] {
  margin-top: 25px;
  width: 80%;
  border: 0;
  background-color: #53CACE;
  border-radius: 5px;
  height: 50px;
  color: white;
  font-weight: 400;
  font-size: 1em;
}

[type='text']:focus {
  outline: none;
  border-color: #53CACE;
}

h1 {
  color: rgba(0,0,0,.7);
  font-weight: 900;
  font-size: 2.5em;
}

p {
  color: rgba(0,0,0,.6);
  font-size: 1.2em;
  margin: 50px 0 50px 0;
}

span {
  font-size: .75em;
  background-color: white;
  padding: 2px 5px;
  color: rgba(0,0,0,.6);
  border-radius: 2px;
  box-shadow: 1px 1px 1px rgba(0,0,0,.3);
  margin: 5px;
}

span:hover {
  color: #53CACE;
}

p:nth-of-type(2) {
  font-size: 1em;
}

</style>


<div id='container'>
  <div class='signup'>
     <form>
       <input type='text' placeholder='First:'  />
       <input type='text' placeholder='Last:'  />
       <input type='text' placeholder='Email:'  />
       <input type='text' placeholder='Phone:'  />
       <input type='submit' placeholder='SUBMIT' />
     </form>
  </div>
  <div class='whysign'>
    <h1>Learn by Doing</h1>
    <p>Learning to code is not magic. It is as simply as opening your browser! See in real time the changes you make to HTMl, CSS, JavaScript, HAML, and more!</p>
    <p>Learn: 
      <span>HTML</span>
      <span>CSS</span>
      <span>JavaScript</span>
    </p>
  </div>
</div>
