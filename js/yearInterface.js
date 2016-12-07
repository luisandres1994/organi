var __currentYear = 2016;

var Year = function(){
    this.data = new Array(
        new Array(32),//
        new Array(32),
        new Array(32),//
        new Array(32),
        new Array(32),//
        new Array(32),
        new Array(32),//
        new Array(32),
        new Array(32),//
        new Array(32),
        new Array(32),//
        new Array(32),
        new Array(32),//
        new Array(32)
    );
    return this;
};

var YearSet = function(num){
    this.year = new Array(num);
    for (var i = this.year.length - 1; i >= 0; i--) {
        this.year[i] = new Year();
    }
    this.getDayData = function(year,month,day){
        if(this.year[year - __currentYear]){
            return this.year[year - __currentYear].data[month][day];
        }
    }
    this.setDayData = function(year=null,month=null,day=null,imgUrl=null,title=null,content=null){
        var content = "<h4>"+((title)?title:'')+"</h4><p>"+((content)?content:'')+"</p>"+((imgUrl)?"<img src='"+imgUrl+"'>":'');
        if(year&&month&&day&&content&&this.year[year-__currentYear]){
            this.year[year - __currentYear].data[month][day] = content;
        }
    }
    return this;
}