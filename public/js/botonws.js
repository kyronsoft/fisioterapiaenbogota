$(function () {
    $('#WAButton').floatingWhatsApp({
        phone: '573106951073', //WhatsApp Business phone number International format-
        headerTitle: 'Chatea con nosotros en WhatsApp!', //Popup Title
        popupMessage: 'Hola, ¿Cómo puedo ayudarte?', //Popup Message
        showPopup: true, //Enables popup display
        buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg"/>', //Button Image
        position: "left"
    });
});