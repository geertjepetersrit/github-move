<!DOCTYPE html>
<html lang="en" dir="ltr">

  <?php include "templates/header.php"; ?>

  <h3 class="center">The mental health chatbot that provides hotlines.</h3>

  <h4 class = "center h4">Have a chat.</h4>
  <h5 class = "center h5-text">Just click on the icon in the bottom right corner.</h5>

<!-- Columns with info -->
<div class="container">
  <h6 class="center h6">
    <strong>
      DISCLAIMER: Please note that the purpose of M.A.X. is assisting people to seek help, instead of providing a cure.
      In other words, M.A.X. is simply an additional tool of mental health care and not a replacement. Use at your own risk.
    </strong>
  </h6>
      <div class="row">
          <div class="column">
              <h5 class = "h5">Chatbots</h5> <!-- Col 1 -->
                <p>
                   M.A.X. is a mental health chatbot. You can chat with it when you feel the need to share your feelings.
                   It makes use of a combination of rule-based and machine learning techniques to provide the appropriate hotlines
                   suited for your current mental health status. It does so by recognizing key words in the conversation.
                   M.A.X. is made with Watson Assistant Lite, which is a product of IBM.
                </p>
          </div>
          <div class="column"> <!-- Col 2 -->
              <h5 class = "h5">Mental health</h5>
                <p>
                   Your mental health is at least as important as your physical health. Therefore, you should take good care of it.
                   Sadly, mental health disorders can happen to anyone. If the step to talk to a human therapist
                   is too high, you can always talk to M.A.X. The first step is always the hardest, M.A.X. focuses on making this step easier.
                </p>
          </div>
          <div class="column"> <!-- Col 3 -->
              <h5 class = "h5">Hotlines</h5>
                <p>
                  There are hotlines that offer a listening ear for the people in need. They are accessible via a phone number or a website.
                  Sometimes they also have the possibility to chat. M.A.X. will know a few hotlines and is able to suggest these to the person when needed.
                  The goal of M.A.X. is to make mental health care more accessible.
                </p>
          </div>
      </div>
</div>

<!-- Table with Dutch hotlines. The white rows are known to M.A.X. -->
<div class="container">
    <table class="hotline">
      <caption>Table with Dutch hotlines. The white rows are known to M.A.X.</caption>
      <tr> <!-- Row 1 -->
        <th>Hotline</th>
        <th>Description</th>
        <th>Phone number(s)</th>
        <th>Website</th>
      </tr>
      <tr> <!-- Row 1 -->
        <td class = "cell-top-left">113 zelfmoordpreventie</td>
        <td class = "cell">For people thinking about suicide or people that know someone who thinks about it</td>
        <td class = "cell">(0900-0)113, 7 days per week, 24 hours</td>
        <td class = "cell-top-right"><a href = "https://www.113.nl/">https://www.113.nl/</a></td>
      </tr>
      <tr> <!-- Row 2 -->
        <td class = "cell">ADF Stichting</td>
        <td class = "cell">Help by anxiety, compulsory or phobia issues</td>
        <td class = "cell">0343-753 009, 7 days per week, from 9:00 until 13:30</td>
        <td class = "cell"><a href = "https://adfstichting.nl/">https://adfstichting.nl/</a></td>
      </tr>
      <tr> <!-- Row 3 -->
        <td class = "cell">ARQ IVP</td>
        <td class = "cell">For psychological help by a traumatic event</td>
        <td class = "cell">088-3305500, 7 days per week, from 8:30 until 21:30</td>
        <td class = "cell"><a href = "https://www.ivp.nl/ivp-accent/zorgprofessionals">https://www.ivp.nl/ivp-accent/zorgprofessionals</a></td>
      </tr>
      <tr> <!-- Row 4 -->
        <td class = "cell-bottom-left">Mind-Korrelatie</td>
        <td class = "cell">Help by psychological or mental issues</td>
        <td class = "cell">0900-1450 or 06-13863803</td>
        <td class = "cell-bottom-right"><a href = "https://mindkorrelatie.nl/">https://mindkorrelatie.nl/</a></td>
      </tr>
      <tr> <!-- Row 5 -->
        <td>De Kindertelefoon (chat also available</td>
        <td>For children to share everything that’s on their mind</td>
        <td>0800 - 0432, 7 days per week, from 11:00 until 21:00</td>
        <td><a href = "https://www.kindertelefoon.nl/">https://www.kindertelefoon.nl/ </a></td>
      </tr>
      <tr> <!-- Row 6 -->
        <td>ABNO</td>
        <td>Elderly that have questions about COVID-19 or just want to talk because they’re lonely</td>
        <td>0348 - 46 66 66</td>
        <td><a href = "https://www.anbo.nl/">https://www.anbo.nl/</a></td>
      </tr>
      <tr> <!-- Row 7 -->
        <td>De Luisterlijn (chat and email also available)</td>
        <td>People who need a listening ear</td>
        <td>0900-0767, 7 days per week, 24 hours</td>
        <td><a href = "https://www.deluisterlijn.nl/onbeperktluisteren.html">https://www.deluisterlijn.nl/onbeperktluisteren.html</a></td>
      </tr>
  </table>
</div>

  <!-- Add M.A.X., which is an instance of Watson Assistant -->
  <script>
    window.watsonAssistantChatOptions = {
        integrationID: "c15fc9a1-8bd3-4630-90c1-a05fb31254cd", // The ID of this integration.
        region: "eu-gb", // The region your integration is hosted in.
        serviceInstanceID: "3877c289-c488-477d-989e-07c2a825f577", // The ID of your service instance.
        onLoad: function(instance) { instance.render(); }
      };
    setTimeout(function(){
      const t=document.createElement('script');
      t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
      document.head.appendChild(t);
    });
</script>

  <?php include "templates/footer.php"; ?>

</html>
