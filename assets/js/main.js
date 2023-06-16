function togglePassword(inputId) {
    var inputElement = document.getElementById(inputId);
    var iconElement = document.getElementById(`show-${inputId}`);
    if (inputElement.type === "password") {
        inputElement.type = "text";
        iconElement.innerHTML = '<i class="fas fa-eye-slash fa-lg"></i>';
    } else {
        inputElement.type = "password";
        iconElement.innerHTML = '<i class="fas fa-eye fa-lg"></i>';
    }
}


function Form() {
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;
  const confirmPassword = document.getElementById("cpassword").value;
  
  
  if (username === "" || password === "" || confirmPassword === "") {
  
    return false;
  } else if (password !== confirmPassword) {
    
    return false;
  } else {
    alert("Registered Successfully!!")
    return false;
  }
}


// JavaScript code for creating and customizing a chart using Chart.js
		// Chart 1
		var ctx1 = document.getElementById('chart1').getContext('2d');
		var chart1 = new Chart(ctx1, {
			type: 'bar',
			data: {
				labels: ['Label 1', 'Label 2', 'Label 3', 'Label 4', 'Label 5'],
				datasets: [{
					label: 'Dataset 1',
					data: [10, 20, 30, 40, 50],
					backgroundColor: 'rgba(75, 192, 192, 0.2)',
					borderColor: 'rgba(75, 192, 192, 1)',
					borderWidth: 1
				}]
			},
			options: {
				responsive: true,
				maintainAspectRatio: false
			}
		});

		// Chart 2
		var ctx2 = document.getElementById('chart2').getContext('2d');
		var chart2 = new Chart(ctx2, {
			type: 'line',
			data: {
				labels: ['Label 1', 'Label 2', 'Label 3', 'Label 4', 'Label 5'],
				datasets: [{
					label: 'Dataset 2',
					data: [50, 40, 30, 20, 10],
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
					borderColor: 'rgba(255, 99, 132, 1)',
					borderWidth: 1
				}]
			},
			options: {
				responsive: true,
				maintainAspectRatio: false
			}
		});