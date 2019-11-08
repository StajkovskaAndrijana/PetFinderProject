// $(document).ready(function() {

//     $('#search_type').change(function() {
//         var $option = $(this).find('option:selected');
//         var value = $option.val();
//         console.log(value);

//         if (value == 1) {

//             window.location.replace("/search/pet");
//         }
//         else if (value == 2) {
//             window.location.replace("/search/cat");
//         } else {
//             window.location.replace("/search/pet");
//         }


//     })

// Dropdow

//     $('#pet_size').click(function() {
//         $(this).children('.custom-select-parent').slideToggle();
//         $(this).find('.fas').toggleClass('fa-angle-down fa-angle-up');
//     });
//     $('#pet_coat').click(function() {
//         $(this).children('.custom-select-parent').slideToggle();
//         $(this).find('.fas').toggleClass('fa-angle-down fa-angle-up');
//     });
//     $('#pet_gender').click(function() {
//         $(this).children('.custom-select-parent').slideToggle();
//         $(this).find('.fas').toggleClass('fa-angle-down fa-angle-up');
//     });
//     $('.custom-select-option').click(function() {
//         var clicked = $(this).attr('clicked');
//         console.log(clicked);
//         if (!clicked) {
//             $(this).attr('clicked', true);
//             $(this).css({ 'background-color': '#2e0152', color: 'white' });
//             var value = $(this).attr('value');
//             var text = $(this).text();
//             var bubble = $(`<div class="bubble_pet" data-value="${value}">${text}</div>`);
//             $('.search-container').append(bubble);
//         }
//         0
//     });
// })
