<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multiple Choice Question Paper</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
    }

    .question-paper {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: white;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
.btn{
  padding: 12px;
    margin-top: 30px;
    margin-bottom: 30px;
    background-color: rgb(92, 251, 92);
    margin-left: 45%;

}
    .question {
      margin-bottom: 20px;
    }

    .question-text {
      font-weight: bold;
    }

    label {
      display: block;
      margin-top: 10px;
    }

    input[type="radio"] {
      margin-right: 5px;
    }

    input[type="radio"]:checked + label {
      font-weight: bold;
      color: green;
    }
  </style>
</head>
<body>
  <div class="question-paper">
    <div class="question">
      <p class="question-text">1. What is the capital of France?</p>
      <label><input type="radio" name="q1" value="a"> a) Paris</label>
      <label><input type="radio" name="q1" value="b"> b) London</label>
      <label><input type="radio" name="q1" value="c"> c) Berlin</label>
      <label><input type="radio" name="q1" value="d"> d) Madrid</label>
    </div>

    <!-- Add more questions similarly -->
  </div>


  <button class="btn">submit</button>
</body>
</html>
