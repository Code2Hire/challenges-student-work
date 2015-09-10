window.onload = function() {
    var tabbed = document.getElementsByClassName('js-tabbed');
    //opens tabs
    for (var i = 0; i < tabbed.length; i++){
        tabbed[i].onclick = function() {
            
            var j, navigation, navigationItems, n, content, contentItems, c;
            
            navigation = this.parentNode;
            navigationItems = navigation.children;
            content = this.parentNode.parentNode.getElementsByClassName('js-tabbed-content')[0];
            contentItems = content.children;
            
            for (var j = 0; j < navigationItems.length; j++){
                n = navigationItems[j];
                n.classList.remove('is-active');
                
                if(n.dataset.num == this.dataset.num) {
                    n.classList.add('is-active');
                }
                
                c = contentItems[j];
                c.classList.remove('is-active');
                
                if(c.dataset.num == this.dataset.num) {
                    c.classList.add('is-active');
                }
                
                
            }
        };
    }
};