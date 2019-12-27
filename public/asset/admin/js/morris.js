$(function () {
    getMorris('donut', 'donut_chart1');
    getMorris('donut', 'donut_chart2');
    getMorris('donut', 'donut_chart3');
});


function getMorris(type, element) {

    if(element == 'donut_chart1')   {
        Morris.Donut({
            element: element,
            data: [{
                label: 'Male',
                value: 45
            }, {
                label: 'Female',
                value: 55
            }],
            colors: ['rgb(233, 30, 99)', 'rgb(0, 188, 212)', 'rgb(255, 152, 0)', 'rgb(0, 150, 136)'],
            formatter: function (y) {
                return y + '%'
            }
        });
    }else if (element == 'donut_chart2'){
        Morris.Donut({
            element: element,
            data: [{
                label: 'Child',
                value: 25
            }, {
                label: 'Adult',
                value: 40
            }, {
                label: 'Old',
                value: 35
            }],
            colors: ['rgb(233, 30, 99)', 'rgb(0, 188, 212)', 'rgb(255, 152, 0)', 'rgb(0, 150, 136)'],
            formatter: function (y) {
                return y + '%'
            }
        });
    }else if(element == 'donut_chart3'){
        Morris.Donut({
            element: element,
            data: [{
                label: 'Educated',
                value: 60
            }, {
                label: 'Uneducated',
                value: 40
            }],
            colors: ['rgb(233, 30, 99)', 'rgb(0, 188, 212)', 'rgb(255, 152, 0)', 'rgb(0, 150, 136)'],
            formatter: function (y) {
                return y + '%'
            }
        });
    }

}