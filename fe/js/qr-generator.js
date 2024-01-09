$(document).ready(function() {
    var view_qr = document.getElementById('view_qr');
    var form = $('#createQRForm');
    var formSubmitted = false;

    var qrElements = {
        text: $('#qr_text'),
        url: $('#qr_url'),
        smsMob: $('#qr_sms_mob'),
        smsBody: $('#qr_sms_body'),
        call: $('#qr_call'),
        emailAddress: $('#qr_email_address'),
        emailSubject: $('#qr_email_subject'),
        emailBody: $('#qr_email_body'),
        geoLatitude: $('#qr_geo_latitude'),
        geoLongitude: $('#qr_geo_longitude'),
        wifiSSID: $('#qr_wifi_ssid'),
        wifiPassword: $('#qr_wifi_password'),
        wifiSecurity: $('#qr_wifi_security'),
        eventTitle: $('#qr_event_title'),
        eventDescription: $('#qr_event_description'),
        eventLocation: $('#qr_event_location'),
        eventStartDatetime: $('#qr_event_start_datetime'),
        eventEndDatetime: $('#qr_event_end_datetime'),
        upiID: $('#upi_id'),
        upiAmount: $('#upi_amount'),
        upiNote: $('#upi_note'),
        pdf: $('#qr_pdf'), // Add the PDF input field
        image: $('#qr_image'), // Add the image input field
        video: $('#qr_video'), // Add the video input field
        audio: $('#qr_audio'), // Add the audio input field


        pdf_url: $('#qr_pdf_url'), // Add the audio input field
        audio_url: $('#qr_audio_url'), // Add the audio input field
        video_url: $('#qr_video_url'), // Add the audio input field
        image_url: $('#qr_image_url'), // Add the audio input field
    };


    form.submit(function(e) {
        e.preventDefault();

        // if (!validateForm()) {
        if (!validateForm()) {
            swal("Oops", "Invalid input detected!", "error", {
                timer: 5000
            });
            setTimeout(() => {
                location.reload();
            }, 6000);
            return;
        }

        // Clear existing QR code container
        view_qr.innerHTML = '';

        // Check if the selected type is 'pdf', 'image', 'video', or 'audio'
        var selectedType = '';
        if ($('#qr_pdf').prop('files').length > 0) {
            selectedType = 'pdf';
        } else if ($('#qr_image').prop('files').length > 0) {
            selectedType = 'image';
        } else if ($('#qr_video').prop('files').length > 0) {
            selectedType = 'video';
        } else if ($('#qr_audio').prop('files').length > 0) {
            selectedType = 'audio';
        }

        console.log("selectedType = " + selectedType);

        if (selectedType === 'pdf' || selectedType === 'image' || selectedType === 'video' ||
            selectedType === 'audio') {
            var fileElement = qrElements[selectedType];
            var file = fileElement[0].files[0];

            if (file) {
                uploadFileToWordPress(file, function(uploadedFileUrl) {
                    // Use the uploadedFileUrl to generate QR code
                    var qrData = generateQRData(uploadedFileUrl);

                    var qr = new QRious({
                        value: qrData,
                        size: 560
                    });

                    console.log("qrData = " + qrData);

                    if (formSubmitted) {
                        showErrorAndReload();
                    } else {
                        showSuccessMessage(qr);
                    }

                    // Set the flag to true after the first form submission
                    formSubmitted = true;
                });
            } else {
                // Handle the case where no file is uploaded
                swal("Oops", "Please upload a " + selectedType.toUpperCase() + " file!", "error", {
                    timer: 5000
                });
            }
        } else {
            // Generate QR code without file for other types
            var qrData = generateQRData();

            var qr = new QRious({
                value: qrData,
                size: 560
            });

            console.log("qrData = " + qrData);

            if (formSubmitted) {
                showErrorAndReload();
            } else {
                showSuccessMessage(qr);
            }

            // Set the flag to true after the first form submission
            formSubmitted = true;
        }
    });


    function uploadFileToWordPress(file, callback) {
        // Show loading message
        Swal.fire({
            title: "Please Wait!!",
            html: "We Are Generating QRCode.",
            didOpen: () => {
                Swal.showLoading();
            },
        });

        var formData = new FormData();
        formData.append('name', file.name);
        formData.append('action', 'upload-attachment');
        formData.append('_wpnonce', '7115597002');
        formData.append('async-upload', file);

        // Use the same URL for all file types
        // var uploadUrl = 'https://qr-generator.alakmalak.ca/wp-admin/async-upload.php';

        $.ajax({
            type: 'POST',
            url: "https://qr-generator.alakmalak.ca/wp-admin/async-upload.php",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                const responseObject = JSON.parse(response);
                const {
                    data: {
                        url: uploadedFileUrl
                    }
                } = responseObject;

                if (uploadedFileUrl) {
                    // Close loading message
                    Swal.close();
                    console.log("Uploaded File URL:", uploadedFileUrl);
                    callback(uploadedFileUrl); // Pass the uploadedFileUrl to the callback
                } else {
                    console.error("Error: 'url' property not found in 'data' object.");
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }

    function validateForm() {
        // Add your validation logic here
        return true; // Return true if the form is valid, false otherwise
    }

    function generateQRData(uploadedFileUrl) {
        var wifiData = (qrElements.wifiSSID.val().trim() !== '' && qrElements.wifiPassword.val().trim() !==
                '' && qrElements.wifiSecurity.val().trim() !== '') ? 'WIFI:S:' + qrElements.wifiSSID.val() +
            ';T:' + qrElements.wifiSecurity.val() + ';P:' + qrElements.wifiPassword.val() + ';' : '';

        var eventData = (qrElements.eventTitle.val().trim() !== '' && qrElements.eventDescription.val()
                .trim() !== '' && qrElements.eventLocation.val().trim() !== '' && qrElements
                .eventStartDatetime.val().trim() !== '' && qrElements.eventEndDatetime.val().trim() !== ''
                ) ?
            'BEGIN:VEVENT' +
            '\nSUMMARY:' + qrElements.eventTitle.val() +
            '\nLOCATION:' + qrElements.eventLocation.val() +
            '\nDESCRIPTION:' + qrElements.eventDescription.val() +
            '\nDTSTART;TZID=Asia/Kolkata:' + qrElements.eventStartDatetime.val().replace(/[-:]/g, '') +
            '00Z' +
            '\nDTEND;TZID=Asia/Kolkata:' + qrElements.eventEndDatetime.val().replace(/[-:]/g, '') + '00Z' +
            '\nEND:VEVENT' :
            '';

        var upiData = (qrElements.upiID.val().trim() !== '' && qrElements.upiAmount.val().trim() !== '' &&
                qrElements.upiNote.val().trim() !== '') ?
            'upi://pay?pa=' + qrElements.upiID.val() + '&am=' + qrElements.upiAmount.val() + '&tn=' +
            qrElements.upiNote.val() + '&cu=INR' :
            '';

        var qrData = qrElements.url.val().trim() !== '' ? qrElements.url.val() :
            (qrElements.smsBody.val().trim() !== '') ? 'SMSTO:' + qrElements.smsMob.val() + ':' + qrElements
            .smsBody.val() :
            (qrElements.call.val().trim() !== '') ? 'tel:' + qrElements.call.val() :
            (qrElements.emailAddress.val().trim() !== '') ? 'mailto:' + qrElements.emailAddress.val() +
            '?subject=' + qrElements.emailSubject.val() + '&body=' + qrElements.emailBody.val() :
            (qrElements.geoLatitude.val().trim() !== '' && qrElements.geoLongitude.val().trim() !== '') ?
            'geo:' + qrElements.geoLatitude.val() + ',' + qrElements.geoLongitude.val() :
            wifiData !== '' ? wifiData :
            eventData !== '' ? eventData :
            upiData !== '' ? upiData :
            uploadedFileUrl ? uploadedFileUrl :
            (qrElements.pdf_url.val().trim() !== '') ? '' + qrElements.pdf_url.val() :
            (qrElements.audio_url.val().trim() !== '') ? '' + qrElements.audio_url.val() :
            (qrElements.video_url.val().trim() !== '') ? '' + qrElements.video_url.val() :
            (qrElements.image_url.val().trim() !== '') ? '' + qrElements.image_url.val() :
            qrElements.text.val();

        return qrData;
    }

    function showErrorAndReload() {
        swal("Oops", "We couldn't connect to the server!", "error", {
            timer: 5000
        });
        setTimeout(() => {
            location.reload();
        }, 6000);
    }

    function showSuccessMessage(qr) {
        Swal.fire({
            icon: "success",
            title: "Success!",
            text: "QR Code Has Been Successfully Generated!!",
            showConfirmButton: true,
        });

        if (view_qr.src) {
            view_qr.src = qr.toDataURL();



            $.ajax({
                type: 'POST',
                url: 'http://localhost/qr-codifier/qr_store_script.php',
                data: {
                    imageData: view_qr.src
                },
                success: function(response) {
                    console.log('Image data sent to the server successfully.');
                },
                error: function(error) {
                    console.error('Error sending image data to the server:', error);
                }
            });


            $("#downloadQR").find("#view_qr").attr("src", view_qr.src);
            $("#downloadQR").find("#download_qr").attr("href", view_qr.src);
            downloadQRMdl = new bootstrap.Modal('#downloadQR');
            downloadQRMdl.show();
            $("<a>").attr("href", view_qr.src).attr("download", "qr.png").appendTo("body").click().remove();
            $("#view_qr").attr("src", view_qr.src);
        }
    }
});