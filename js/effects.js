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
  $('a#toppanel-toggle').click(function () {
    $('#toppanel').slideToggle('middle');
    return false;
  });

// Sidepanel
  $('a#sidepanel-toggle').click(function () {
    $('#sidepanel').toggle('middle');
    return false;
  });
})
;
