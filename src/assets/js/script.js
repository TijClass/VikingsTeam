/* Subscribe */

// $(document).ready(function () {
//   function isValidEmailAddress(emailAddress) {
//     var pattern = new RegExp(
//       /^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i
//     );
//     return pattern.test(emailAddress);
//   }

//   // Cookie Start

//   var subscribed = $.cookie("subscribed");
//   if (subscribed == "true") {
//     $("#subscribe_box").hide();
//   } else {
//     $("#subscribe_newsletter").click(function () {
//       var value = 1;
//       var mail = $("#subscriber_email").val();
//       var dataString = "action=subscribe&email=" + mail;
//       if ($.trim(mail).length > 0 && isValidEmailAddress(mail)) {
//         $.ajax({
//           type: "post",
//           crossDomain: true,
//           url: "../src/app/newsletter.php",
//           data: dataString,
//           cache: false,
//           success: function (data) {
//             console.log(data);
//             if (data) {
//               if (data == "true") {
//                 $.cookie("subscribed", "true", { expires: 30, path: "/" });
//                 console.log("Thankyou for subscribe our newsletter");
//                 $("#subscribe_message").removeClass();
//                 $("#subscribe_message").addClass("success_message");
//                 $("#subscriber_email").hide();
//                 $("#subscribe_newsletter").hide();
//                 $("#subscribe_message").html(
//                   "<div class='bg-green-100 border border-green-400 text-green-700 px-4 py-3 my-3 rounded relative' role='alert'><strong class='font-bold'>Holy smokes!</strong><span class='block sm:inline'> You have Susscessfully subscribed.</span></div>"
//                 );
//                 // $("#subscribe_message").fadeIn().delay(3000).fadeOut();
//               } else if (data == "exists") {
//                 $("#subscribe_message").removeClass();
//                 $("#subscribe_message").addClass("error_message");
//                 $("#subscribe_newsletter").hide();
//                 $("#subscribe_newsletter").hide();
//                 $("#subscribe_message").html(
//                   "<div class='bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 my-3 rounded relative' role='alert'><strong class='font-bold'>Nice boy!</strong><span class='block sm:inline'> You are already subscribed./.</span></div>"
//                 );
//               } else {
//                 console.log(
//                   "There is a SQL error please notify admin about this error."
//                 );
//               }
//             } else {
//               $("#subscribe_message").removeClass();
//               $("#subscribe_message").addClass("error_message");
//               $("#subscribe_newsletter").hide();
//               $("#subscribe_newsletter").hide();
//               $("#subscribe_message").html(
//                 "<div class='bg-red-100 border border-red-400 text-red-700 px-4 py-3 my-3 rounded relative' role='alert'><strong class='font-bold'>What NOW!</strong><span class='block sm:inline'> There is an error!</span></div>"
//               );
//             }
//           },
//           error: (error) => {
//             console.error(error);
//           },
//         });
//       } else {
//         console.log("Please type a valid email address!");
//       }
//       return false;
//     });
//   }
// });


// story model


const modal_overlay = document.querySelector('#modal_overlay');
const modal = document.querySelector('#modal');

function openModal (value){
    const modalCl = modal.classList
    const overlayCl = modal_overlay
    console.log(value)
    if(value){
    overlayCl.classList.remove('hidden')
    setTimeout(() => {
        modalCl.remove('opacity-0')
        modalCl.remove('-translate-y-full')
        modalCl.remove('scale-150')
    }, 100);
    } else {
    modalCl.add('-translate-y-full')
    setTimeout(() => {
        modalCl.add('opacity-0')
        modalCl.add('scale-150')
    }, 100);
    setTimeout(() => overlayCl.classList.add('hidden'), 300);
    }
}
openModal(false)