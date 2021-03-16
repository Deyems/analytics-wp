var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Jerry', 'Veronica', 'Sussan', 'John', 'Henry', 'Olumide'],
        datasets: [{
            label: '',
            data: [220000, 180000, 225000, 240000, 148000, 120000],
            backgroundColor: [
                'rgb(90, 214, 176)',
                'rgb(90, 214, 176)',
                'rgb(90, 214, 176)',
                'rgb(90, 214, 176)',
                'rgb(90, 214, 176)',
                'rgb(90, 214, 176)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 0
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
var ctx2 = document.getElementById('myChart2').getContext('2d');
var myChart2 = new Chart(ctx2, {
    type: 'doughnut',
    data: {
        labels: ['Facebook', 'Twitter', 'Medium', 'Linkedin'],
        datasets: [{
            label: '# of Votes',
            data: [150, 70, 50, 30],
            backgroundColor: [
                'rgb(76, 141, 235)',
                'rgb(90, 214, 176)',
                'rgb(255, 171, 73)',
                'rgb(238, 93, 112)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
            ],
            borderWidth: 0
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
