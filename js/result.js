document.addEventListener('DOMContentLoaded', function(){
  tabs = document.querySelectorAll('#js-tab li');
  for(i = 0; i < tabs.length; i++) {
    tabs[i].addEventListener('click', tabSwitch, false);
  }

  function tabSwitch(){
    tabs = document.querySelectorAll('#js-tab li');
    var node = Array.prototype.slice.call(tabs, 0);
    node.forEach(function (element) {
      element.classList.remove('active');
    });
    this.classList.add('active');

    content = document.querySelectorAll('.tab-content');
    var node = Array.prototype.slice.call(content, 0);
    node.forEach(function (element) {
      element.classList.remove('active');
    });

    const arrayTabs = Array.prototype.slice.call(tabs);
    const index = arrayTabs.indexOf(this);
    
    document.querySelectorAll('.tab-content')[index].classList.add('active');
  };
});