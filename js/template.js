document.addEventListener("DOMContentLoaded", function () {
  // Dropdown menu
  let topmenu = document.querySelector("#topmenu");
  if (topmenu) {
    let entries = topmenu.querySelectorAll('ul.nav li');
    for (let i = 0; i < entries.length; i++) {
      let entry = entries[i];
      let mobileIconNode = document.createElement('span');
      mobileIconNode.className = 'mobile-icon';
      let link = entry.querySelector('a, span.separator');
      link.insertBefore(mobileIconNode, link.firstChild);
      let ul = entry.querySelector('ul');
      if (ul) {
        entry.addEventListener('mouseover', function (event) {
          if (!event.target.classList.contains('mobile-icon')) {
            entry.querySelector('ul').style.display = 'block';
            entry.classList.add('opened');
          }
        }, false);
        entry.addEventListener('mouseout', function (event) {
          if (!event.target.classList.contains('mobile-icon')) {
            entry.querySelector('ul').style.display = 'none';
            entry.classList.remove('opened');
          }
        }, false);
        let mobileIcon = entry.querySelector('.mobile-icon');
        mobileIcon.addEventListener('click', function (event) {
          if (entry.classList.contains('opened')) {
            entry.querySelector('ul').style.display = 'none';
            entry.classList.remove('opened');
          } else {
            entry.querySelector('ul').style.display = 'block';
            entry.classList.add('opened');
          }
          event.preventDefault();
        }, false);
      }
    }
  }

  // Article Details
  let infoTerms = document.querySelectorAll('.article-info-term');
  for (let i = 0; i < infoTerms.length; i++) {
    infoTerms[i].addEventListener('click', function (event) {
      infoTerms[i].parentNode.classList.toggle('opened')
    });
  }

// Toppanel
  let toppanel = document.getElementById('toppanel');
  let toppaneltoggle = document.getElementById('toppanel-toggle');

  if (toppaneltoggle) {
    toppaneltoggle.addEventListener('click', function (event) {
      event.preventDefault();

      if (!toppanel.classList.contains('active')) {
        toppanel.classList.add('active');
        toppanel.style.height = 'auto';

        let height = toppanel.clientHeight + "px";

        toppanel.style.height = '0px';

        setTimeout(function () {
          toppanel.style.height = height;
        }, 0);
      } else {
        toppanel.style.height = '0px';

        toppanel.addEventListener('transitionend', function () {
          toppanel.classList.remove('active');
        }, {
          once: true
        });
      }
    });
  }

  // Sidepanel
  let sidepanel = document.getElementById('sidepanel');
  let sidepaneltoggle = document.getElementById('sidepanel-toggle');

  if (sidepaneltoggle) {
    sidepaneltoggle.addEventListener('click', function (event) {
      event.preventDefault();

      if (!sidepanel.classList.contains('active')) {
        sidepanel.classList.add('active');
        sidepanel.style.width = 'auto';

        let width = sidepanel.clientWidth + "px";

        sidepanel.style.width = '0px';

        setTimeout(function () {
          sidepanel.style.width = width;
        }, 0);
      } else {
        sidepanel.style.width = '0px';

        sidepanel.addEventListener('transitionend', function () {
          sidepanel.classList.remove('active');
        }, {
          once: true
        });
      }
    });
  }
})
;
