var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
  });







  function toggle(){
          document.getElementById('toast').classList.toggle("toast-none");
      }

  function toggleError(){
      document.getElementById('error').classList.toggle("toast-none");
  }

  function toggleDisabilityBtn(){
      const batn = document.getElementById('btn');
      batn.disabled = !batn.disabled;
  }

  function cleanValues(){
          document.getElementById("name").value = '';
          document.getElementById("email").value = '';
          document.getElementById("message").value = '';
         
      }
  
  function sendEmail(){
     
      toggleDisabilityBtn();
      const user_name = document.getElementById("name").value;
      const user_email = document.getElementById("email").value;
      const user_message = document.getElementById("message").value;


      if( user_name != '' && user_email != '' && user_message != ''){
          
          
      var templateParams = {
      email: user_email,
      name: user_name,
      message: user_message
      };


          emailjs.send('service_iz5w21e', 'template_6afyj8z', templateParams)
          .then(function(response){
            cleanValues();
              toggle();
              
              setTimeout(toggle, 3500);
              toggleDisabilityBtn();
          }, function(error) {
              toggleError();
              setTimeout(toggleError, 3500);
              toggleDisabilityBtn();
          });
          

      }else{            
          toggleError();
          setTimeout(toggleError, 3500);
          toggleDisabilityBtn();
      }


  }












  
// for humberger toggle button
     var tgl = true;
    function toogleMenu(){
       var nav = document.getElementById("nav");
      
       var hamburger =  document.getElementById("hamburger");
      

        

      if(tgl == false){

        hamburger.style.position = "absolute";
        nav.style.right = "-100%";
        tgl = !tgl;

        }else{
            hamburger.style.position = "fixed";
            nav.style.right = "0";
            tgl = !tgl;
        }
        
       
    }

// for humberger toggle button