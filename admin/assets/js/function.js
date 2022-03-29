	$(document).ready(function () {
		$('.js-example-basic-multiple').select2();
	});
	$(document).ready(function () {


		$(".confirm-icon").click(function () {
			$(this).toggleClass("fa-eye fa-eye-slash");
			var input = $(".confirm-input");
			if (input.attr("type") === "password") {
				input.attr("type", "text");
			} else {
				input.attr("type", "password");
			}
		});

		$(".enter-icon").click(function () {
			$(this).toggleClass("fa-eye fa-eye-slash");
			var input = $(".enter-input");
			if (input.attr("type") === "password") {
				input.attr("type", "text");
			} else {
				input.attr("type", "password");
			}
		});

		$(".current-icon").click(function () {
			$(this).toggleClass("fa-eye fa-eye-slash");
			var input = $(".current-input");
			if (input.attr("type") === "password") {
				input.attr("type", "text");
			} else {
				input.attr("type", "password");
			}
		});


	});
	$(document).ready(function () {
		// modal hide one modal show next one 
		$("#yesregister").click(function () {
			$('.registerManager').modal('hide');
			$('.yesregisterManager').modal('show');
		});


		// modal hide one modal show next one 
		$(".yesmanager").click(function () {
			$('.registerManager').modal('hide');
			$('.yesregisterManager').modal('show');
		});

		$(".yesmanager").click(function () {
			$('.registerManager').modal('hide');
			$('.yesregisterManager1').modal('show');
		});

		// modal hide one modal show next one 
		$("#yesinactive").click(function () {
			$('.inactiveAgent').modal('hide');
			$('.confirmInactive').modal('show');
		});

		$('#select-modal').change(function () { //jQuery Change Function
			var opval = $(this).val(); //Get value from select element
			if (opval == "active") { //Compare it and if true
				$('.activeActivity').modal("show"); //Open Modal
			}
			else if (opval == "inactive") {
				$('.inActiveActivity').modal("show");
			}
		});

		$("#yesInactiveActivity").click(function () {
			$('.inActiveActivity').modal('hide');
			$('.confirmInactiveActivity').modal('show');
		});

		$("#yesActiveActivity").click(function () {
			$('.activeActivity').modal('hide');
			$('.confirmActiveActivity').modal('show');
		});

		$("#yesDeleteReminder").click(function () {
			$('.deleteReminder').modal('hide');
			$('.confirmDeleteReminder').modal('show');
		});

		// $('.dropdown-menu.reminder-dropdown-menu').on('click', function(event){
		// 	event.stopPropagation();
		// });

	});

	/*cropper start here*/


	$(function () {

		var croppie = null;

		var el = document.getElementById('resizer');

		$.base64ImageToBlob = function (str) {

			var pos = str.indexOf(';base64,');
			var type = str.substring(5, pos);
			var b64 = str.substr(pos + 8);

			var imageContent = atob(b64);

			var buffer = new ArrayBuffer(imageContent.length);
			var view = new Uint8Array(buffer);

			for (var n = 0; n < imageContent.length; n++) {
				view[n] = imageContent.charCodeAt(n);
			}

			var blob = new Blob([buffer], {
				type: type
			});

			return blob;
		}

		$.getImage = function (input, croppie) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					croppie.bind({
						url: e.target.result,
					});
				}
				reader.readAsDataURL(input.files[0]);
			}
		}


		$("#upload").on("change", function (event) {

			$("#et-profile-image-modal").modal();

			croppie = new Croppie(el, {
				viewport: {
					width: 200,
					height: 200,
					type: 'circle'
				},
				boundary: {
					width: 250,
					height: 250
				},
				enableOrientation: true
			});

			$.getImage(event.target, croppie);

		});
		$('.repeater').repeater({
			// (Optional)
			// start with an empty list of repeaters. Set your first (and only)
			// "data-repeater-item" with style="display:none;" and pass the
			// following configuration flag
			initEmpty: false,
			// (Optional)
			// "defaultValues" sets the values of added items.  The keys of
			// defaultValues refer to the value of the input's name attribute.
			// If a default value is not specified for an input, then it will
			// have its value cleared.
			defaultValues: {
				'text-input': 'foo'
			},
			// (Optional)
			// "show" is called just after an item is added.  The item is hidden
			// at this point.  If a show callback is not given the item will
			// have $(this).show() called on it.
			show: function () {
				$(this).slideDown();
			},
			// (Optional)
			// "hide" is called when a user clicks on a data-repeater-delete
			// element.  The item is still visible.  "hide" is passed a function
			// as its first argument which will properly remove the item.
			// "hide" allows for a confirmation step, to send a delete request
			// to the server, etc.  If a hide callback is not given the item
			// will be deleted.
			hide: function (deleteElement) {
				if (confirm('Are you sure you want to delete this element?')) {
					$(this).slideUp(deleteElement);
				}
			},
			// (Optional)
			// You can use this if you need to manually re-index the list
			// for example if you are using a drag and drop library to reorder
			// list items.
			ready: function (setIndexes) {
				$dragAndDrop.on('drop', setIndexes);
			},
			// (Optional)
			// Removes the delete button from the first list item,
			// defaults to false.
			isFirstItemUndeletable: true
		});

		$("#et-crop-and-upload").on("click", function () {

			croppie.result('base64').then(function (base64) {
				$("#et-profile-image-modal").modal("hide");
				$("#et-profile-preview-image").attr("src", base64);
				$("#et-field-avatar").val(base64);
			});

		});

		$('#et-profile-image-modal').on('hidden.bs.modal', function (e) {
			// This function will call immediately after model close
			// To ensure that old croppie instance is destroyed on every model close
			setTimeout(function () {
				croppie.destroy();
			}, 100);
		})

		$(".rotate").on("click", function () {
			croppie.rotate(parseInt($(this).data('deg')));
		});

	});



	/*cropper end here*/

	/*modal click change start here*/

	$(function () {

		$('#delete-menu').on('click', function () {
			$('.delete-modal').modal('hide');
			$('.confirm-delete-modal').modal('show');
		});

		$('#login-2').on('click', function () {
			$('.bd-example-delete-modal-lg').modal('hide');
			$('.login-2-modal').modal('show');
		});

		//    $('#vote-cancel-modal').on('click', function(){    
		//        $('.vote-cancel-modal').modal('hide');
		//        $('.vote-cancel-modal-2').modal('show');
		//    }); 

	});


	/*modal click change end here*/


	$(document).ready(function () {
		$(".dataTables_filter input").attr("placeholder", "Search");
		function copyToClipboard(element) {
			var $temp = $("<input>");
			$("body").append($temp);
			$temp.val($(element).text()).select();
			document.execCommand("copy");
			$temp.remove();
		}
	});





	// modal hide one modal show next one 
	$("#confirmReject").click(function () {
		$('.reasonReject').modal('hide');
		$('.confirmRejectModal').modal('show');
	});

	$("#blockDr").click(function () {
		$('.blockDoctor').modal('hide');
		$('.confirmBlock').modal('show');
	});

	$("#yesblock").click(function () {
		$('.blockUser').modal('hide');
		$('.confirmBlock').modal('show');
	});

	$("#yesUnblock").click(function () {
		$('.UnblockUser').modal('hide');
		$('.confirmUnblock').modal('show');
	});

	// $('.pkg-radio#test2').click(function () {
	// 	$(".select-manager").show('slow');
	// });

	// $('input[type="radio"]').trigger('click');  // trigger the event


	$('input[type="radio"]').click(function () {
		if ($(this).attr("value") == "ABC") {
			$(".select-manager").hide('slow');
		}
		if ($(this).attr("value") == "PQR") {
			$(".select-manager").show('slow');

		}
	});

	$('input[type="radio"]').trigger('click');  // trigger the event

	$('.manager-dropdown').select2({
		placeholder: "Tags",
		allowClear: true
	});

	$('#edit-details').click(function () {
		if ($(this).text() == 'Edit') {
			$(".site-input").removeAttr("readonly");
			$(".site-input.select").removeAttr("readonly");
			$(this).text('Update');
		}
		else {
			$(".site-input").attr("readonly", true);
			$(".site-input.select").attr("readonly", true);
			$(this).text('Edit');
		}
	});

	// modal hide one modal show next one 
	$("#pwd1-btn").click(function () {
		$('#pwdrecovery1').modal('hide');
		$('#pwdrecovery2').modal('show');
	});

	// modal hide one modal show next one 
	$("#pwd2-btn").click(function () {
		$('#pwdrecovery2').modal('hide');
		$('#pwdrecovery3').modal('show');
	});


	function increaseValue() {
		var value = parseInt(document.getElementById('number').value, 10);
		value = isNaN(value) ? 0 : value;
		value++;
		document.getElementById('number').value = value;
	}

	function decreaseValue() {
		var value = parseInt(document.getElementById('number').value, 10);
		value = isNaN(value) ? 0 : value;
		value < 1 ? value = 1 : '';
		value--;
		document.getElementById('number').value = value;
	}



	/*--- Play Feedback Video ---*/
	try {

		var feedbackVideo = document.querySelector('.feedbackVideo');
		var playButton = document.querySelector('.detail-video button');

		// console.log(playButton);

		playButton.addEventListener('click', function () {
			playButton.style.display = 'none';
			feedbackVideo.play();
			feedbackVideo.setAttribute('controls', true);
		})
	} catch (error) {
		console.log(error)
	}


	/*--- Adding Promo Type ---*/
	var amountType = Array.from(document.getElementsByClassName('amountType'));



	amountType.forEach(function (f) {
		f.addEventListener("change", function () {
			if (f.value == "percentage") {
				document.querySelector('.amountInput').style.display = 'none';
				document.querySelector('.percentageInput').style.display = 'block';
			} else if (f.value == "fixedAmount") {
				document.querySelector('.percentageInput').style.display = 'none';
				document.querySelector('.amountInput').style.display = 'block';
			}
		})
	})



	try {
			/*--- Shipping Fees ---*/
	var shippingEdit = document.querySelector('.shippingFeesEdit');
	// var shippingUpdate = document.querySelector('.shippingFeesUpdate');
	var shippingFeesInput = document.querySelector('.shipping-input');
	var shippingFeesValue = document.querySelector('.shippingFeesValue');



	// console.log(shippingFeesInput)
	shippingFeesInput.style.display = "none";

	shippingEdit.addEventListener('click', function () {
		// setTimeout(() => { shippingEdit.setAttribute('value', 'updated'); }, 200);

		// console.log(shippingEdit.value)
		if (shippingEdit.value == 'updated') {
			shippingFeesInput.style.display = "none";
			shippingFeesValue.style.display = "block";
			shippingEdit.innerHTML = "Edit";
			shippingEdit.setAttribute('value', 'edit');
			// console.log(shippingFeesInput.value)
			shippingFeesValue.children[0].innerHTML = shippingFeesInput.value
		}
		else if (shippingEdit.value == 'edit') {
			shippingFeesInput.style.display = "block";
			shippingFeesValue.style.display = "none";
			shippingEdit.innerHTML = "Update";
			shippingEdit.setAttribute('value', 'updated');
		}


	})
	} catch (error) {
		console.log(error)
	}







