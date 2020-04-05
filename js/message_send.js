function send() {
    var name = document.getElementById( 'name' ).value;
    var email = document.getElementById( 'email' ).value;
    var message = document.getElementById( 'message' ).value;

    let body = {
        name: name,
        email: email,
        message: message
    }

    fetch( 'https://api.magicsk.eu/message', {
        method: 'POST',
        body: JSON.stringify( body ),
        headers: {
            'content-type': 'application/json'
        }
    } ).then( response => {
        var anim = document.getElementById( 'response' ).style.transform = 'none';
        if ( response.ok ) {
            document.getElementById( 'response' ).innerHTML = '<div class="alert alert-success" role="alert">Your message was successfuly sent!</div>';
            anim;
            setTimeout( time => $( '#mcontact' ).modal( 'toggle' ), 1000 );
        } else {
            document.getElementById( 'response' ).innerHTML = '<div class="alert alert-danger" role="alert">Can' + "'" + 't send your message now, please try again later!</div>';
            anim;
            throw new Error( 'Error sending the message.' );
        }
    } );
}