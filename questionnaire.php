<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Survey on ChatGPT in Education</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #D2691E;
        margin: 0;
        padding: 0;
    }
    
    .container {
        max-width: 800px;
        margin: 30px auto;
        background-color: #FFF8DC;
        padding: 30px;
        border-radius: 30px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    h2 {
        color: #333;
        text-align: center;
    }
    
    form {
        margin-top: 40px;
    }
    
    label {
        display: block;
        margin-bottom: 20px;
        color: #555;
    }
    
    input[type="text"],
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    
    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 12px 20px;
        border-radius: 5px;
        cursor: pointer;
        display: block;
        margin: 0 auto;
    }
    
    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
</head>
<body>

<div class="container">
    <h2>Survey on ChatGPT in Education</h2>
    <h4>Hello,
I am Sangamnath Panchal, a student of M.Com Business Analytics Sem IV at R.A. Podar College. Currently, I am conducting a survey on the topic of "ChatGPT in Education."Your participation in this survey is greatly appreciated, as your insights are invaluable for our research. We are exploring the potential of ChatGPT to enhance educational interactions and support students. Kindly take a moment to answer the following questions honestly and to the best of your knowledge. Your input will contribute significantly to the success of our research.</h1>

    <form action="process.php" method="post">
        <label for="fullName">1. Enter Full Name </label>
        <input type="text" id="fullName" name="fullName" required>
        
        <label for="age">2. Age </label>
        <select id="age" name="age" required>
            <option value="">Select Age Range</option>
            <option value="18-24">18-24</option>
            <option value="25-34">25-34</option>
            <option value="35-44">35-44</option>
            <option value="45 or older">45 or older</option>
        </select>
        
        <label for="education">3. Educational Background </label>
        <select id="education" name="education" required>
            <option value="">Select Educational Background</option>
            <option value="High School">High School</option>
            <option value="Undergraduate">Undergraduate</option>
            <option value="Graduate">Graduate</option>
            <option value="Postgraduate">Postgraduate</option>
            <option value="Other">Other</option>
        </select>
        
        <label for="interactedChatGPT">4. Have you ever interacted with a ChatGPT for educational purposes? </label>
        <select id="interactedChatGPT" name="interactedChatGPT" required>
            <option value="">Select</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
!Type NA if not applicable 
        
        <label for="expectations_or_concerns">5. Please share your expectations or concerns regarding the use of ChatGPT in educational settings.</label>
       <input type="text" id="expectations_or_concerns" name="expectations_or_concerns" required>

<label for="Likely_use">6. How likely would you be to use a ChatGPT-powered system for educational purposes in the future?</label>
<input type="range" id = "Likely_use" name="Likely_use" min="1" max="5" step="1">

<label for="your_experience">7. Please describe your experience. What tasks or educational interactions did you engage in?</label>
<input type="text" id="your_experience" name="your_experience" required>

<label for="overall_satisfaction">8. How would you rate your overall satisfaction with ChatGPT in educational settings?</label>
<input type="range" id="overall_satisfaction" name="overall_satisfaction" required>

<label for="ChatGPT_enhances">9. To what extent do you believe ChatGPT enhances educational interactions for students?</label>

<select id="ChatGPT_enhances" name="ChatGPT_enhances" required>
<option value="">Select</option>
            <option value="Significantly">Significantly</option>
            <option value="Moderately">Moderately</option>
            <option value="Slightly">Slightly</option>
            <option value="Not at all">Not at all</option>
</select>

<label for="Which_Scenario">10. In which educational scenarios do you think ChatGPT is most effective in supporting students?(e.g., homework assistance, concept clarification, language learning, etc.)</label>
<input type="text" id="Which_Scenario" name="Which_Scenario" required>

<label for="compare_to_traditional_methods">11. How does ChatGPT compare to traditional methods of educational support, such as human tutors or written resources?</label>
<select id="compare_to_traditional_methods" name="compare_to_traditional_methods" required>
<option value="">Select</option>
<option value="More effective">More effective</option>
<option value="Equally effective">Equally effective</option>
<option value="Less effective">Less effective</option>
<option value="Not sure">Not sure</option>
</select>

<label for="specific_subjects">12. Are there specific subjects or topics where you find ChatGPT more or less helpful compared to traditional support systems?</label>
<input type="text" id="specific_subjects" name="specific_subjects" required>

<label for="features_or_functionalities">13. What features or functionalities would you expect from a ChatGPT to make it more effective?</label>
<input type="text" id="features_or_functionalities" name="features_or_functionalities" required>



"Thank you for participating in the survey!"

        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
