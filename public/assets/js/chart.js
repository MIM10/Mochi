var ctx = document.getElementById('pie-chart').getContext('2d');
var pieChart = new Chart(ctx, {
type: 'pie',
data: {
    labels: ['Pasien', 'Dokter'],
    datasets: [{
    data: [90.91, 9.09],
    backgroundColor: ['#3b82f6', '#ef4444']
    }]
},
options: {
    responsive: true,
    maintainAspectRatio: false
}
});
