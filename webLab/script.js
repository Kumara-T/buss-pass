document.getElementById('busPassForm').addEventListener('submit', function(event) {
    event.preventDefault(); 

   
    const name = document.getElementById('name').value;
    const dob = document.getElementById('dob').value;
    const gender = document.getElementById('gender').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const address = document.getElementById('address').value;
    const idProof = document.getElementById('id').value;
    const routeFrom = document.getElementById('from').value;
    const routeTo = document.getElementById('to').value;
    const duration = document.getElementById('duration').value;

    
    const formData = {
        name: name,
        dob: dob,
        gender: gender,
        email: email,
        phone: phone,
        address: address,
        idProof: idProof,
        routeFrom: routeFrom,
        routeTo: routeTo,
        duration: duration
    };

   
    localStorage.setItem('busPassFormData', JSON.stringify(formData));

    
    window.location.href = 'thank_you.html';
});
