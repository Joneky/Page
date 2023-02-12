<style>
  body {
    font-family: sans-serif;
    background-color: lightgray;
  }
  .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
  }
  .header {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
  }
  img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-right: 20px;
  }
  h1 {
    font-size: 36px;
    margin: 0;
  }
  .bio {
    font-size: 18px;
    text-align: center;
    margin-bottom: 20px;
  }
  .repos {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }
  .repo {
    width: 30%;
    background-color: white;
    padding: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
  }
  .repo h2 {
    font-size: 24px;
    margin: 0;
    margin-bottom: 10px;
  }
  .repo p {
    font-size: 14px;
    color: gray;
    margin: 0;
    margin-bottom: 10px;
  }
</style>

<div class="container">
  <div class="header">
    <img src="https://via.placeholder.com/100x100" alt="Profile picture">
    <h1>Your Name</h1>
  </div>
  <div class="bio">
    <p>I am a software developer with a passion for building amazing things. My goal is to create applications that are both functional and beautiful.</p>
  </div>
  <h2>My Repositories</h2>
  <div class="repos">
    <div class="repo">
      <h2>Repository 1</h2>
      <p>Description of repository 1</p>
    </div>
    <div class="repo">
      <h2>Repository 2</h2>
      <p>Description of repository 2</p>
    </div>
    <div class="repo">
      <h2>Repository 3</h2>
      <p>Description of repository 3</p>
    </div>
  </div>
</div>
