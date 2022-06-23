<!DOCTYPE html>
<html lang="en">

<head>
  <style>

    /* Styling the body */
    body {
      margin: 0;
      padding: 0;
    }
    
    /* Styling section, giving background
      image and dimensions */
    section {
      width: 100%;
      height: 100vh;
      background:
url('images/vitamins.jpg');
      background-size: cover;
    }
    
    /* Styling the left floating section */
    section .leftBox {
      width: 50%;
      height: 100%;
      float: left;
      padding: 50px;
      box-sizing: border-box;
    }
    
    /* Styling the background of
      left floating section */
    section .leftBox .content {
      color: #fff;
      background: rgba(0, 0, 0, 0.5);
      padding: 40px;
      transition: .5s;
    }
    
    /* Styling the hover effect
      of left floating section */
    section .leftBox .content:hover {
      background: #e91e63;
    }
    
    /* Styling the header of left
      floating section */
    section .leftBox .content h1 {
      margin: 0;
      padding: 0;
      font-size: 50px;
      text-transform: uppercase;
    }
    
    /* Styling the paragraph of
      left floating section */
    section .leftBox .content p {
      margin: 10px 0 0;
      padding: 0;
    }
    
    /* Styling the three events section */
    section .events {
      position: relative;
      width: 50%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      float: right;
      box-sizing: border-box;
    }
    
    /* Styling the links of
    the events section */
    section .events ul {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      margin: 0;
      padding: 40px;
      box-sizing: border-box;
    }
    
    /* Styling the lists of the event section */
    section .events ul li {
      list-style: none;
      background: #fff;
      box-sizing: border-box;
      height: 200px;
      margin: 15px 0;
    }
    
    /* Styling the time class of events section */
    section .events ul li .time {
      position: relative;
      padding: 20px;
      background: #262626;
      box-sizing: border-box;
      width: 30%;
      height: 100%;
      float: left;
      text-align: center;
      transition: .5s;
    }
    
    /* Styling the hover effect
      of events section */
    section .events ul li:hover .time {
      background: #e91e63;
    }
    
    /* Styling the header of time
      class of events section */
    section .events ul li .time h2 {
      position: absolute;
      margin: 0;
      padding: 0;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: #fff;
      font-size: 60px;
      line-height: 30px;
    }
    
    /* Styling the texts of time
    class of events section */
    section .events ul li .time h2 span {
      font-size: 30px;
    }
    
    /* Styling the details
    class of events section */
    section .events ul li .details {
      padding: 20px;
      background: #fff;
      box-sizing: border-box;
      width: 70%;
      height: 100%;
      float: left;
    }
    
    /* Styling the header of the
    details class of events section */
    section .events ul li .details h3 {
      position: relative;
      margin: 0;
      padding: 0;
      font-size: 22px;
    }
    
    /* Styling the lists of details
    class of events section */
    section .events ul li .details p {
      position: relative;
      margin: 10px 0 0;
      padding: 0;
      font-size: 16px;
    }
    
    /* Styling the links of details
    class of events section */
    section .events ul li .details a {
      display: inline-block;
      text-decoration: none;
      padding: 10px 15px;
      border: 1.5px solid #262626;
      margin-top: 8px;
      font-size: 18px;
      transition: .5s;
    }
    
    /* Styling the details class's hover effect */
    section .events ul li .details a:hover {
      background: #e91e63;
      color: #fff;
      border-color: #e91e63;
    }
    
  </style>
</head>

<body>
  <section>
  
<div id="main">
  ...
</div> 
    <div class="leftBox">
      <div class="content">
        <h1>
          Events and Programs.
        </h1>
        
<p>
This page displays every activity carried out by the organisation or any event that involves the field of nutrition and dietetics .Pariticipants are encouraged to upload events they might have that is helpful to the students in knowledge provision and also to upgrade and better their professional experience.
<br>
<br>
Create your own event or upload an event by clicking to browse the event poster and submitting for review on autheticity.
<br>
<br>
<form action="process.php">
  <input type="file" id="myFile" name="filename">
  <input type="submit">
</form>

        </p>

      </div>
    </div>

    <div class="events">
      <ul>
        <li>
          <div class="time">
            <h2>
              15 <br><span>June</span>
            </h2>
          </div>
          <div class="details">
            <h3>
              97th Nestlé Nutrition Institute Workshop - Intersections of Nutrition
            </h3>
            
<p>
              What we feed our children today will determine . </p>


            <a href="https://www.nestlenutrition-institute.org/conferences/details/nni-workshops">View Details</a>
          </div>
          <div style="clear: both;"></div>
        </li>

        <li>
          <div class="time">
            <h2>
              8th  <br><span>April</span>
            </h2>
          </div>
          <div class="details">
            <h3>
              Food Politics
            </h3>
            
<p>
              From Personal Responsibility to Social Responsibility.April 8, 2014, 6:00 pm
            </p>

            <a href="https://www.montclair.edu/calendar/view-event.php?id=26473">View Details</a>
          </div>
          <div style="clear:both;"></div>
        </li>

        <li>
          <div class="time">
            <h2>
              7<br><span>September</span>
            </h2>
          </div>
          <div class="details">
            <h3>
              The 13th Nordic Congress on Eating Disorders 
            </h3>
            
<p>
            The theme of the conference is “From prevention to recovery”.

Your host will be the Norwegian Society for Eating Disorders,
in collaboration with ..
            </p>


            <a href="https://nedsconference.com/">View Details</a>
          </div>
          <div style="clear:both;"></div>
        </li>
      </ul>
    </div>
  </section>
 
</body>

</html>
