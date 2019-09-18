/* Change my projects button background color and show backend/frontend
projects */
document.querySelector('.all').classList.add("selected-projects-button");
function selectActiveButtonAndShowCards(id) {
	let button_choice = document.getElementById(id);
	document.querySelector('.all').classList.remove("selected-projects-button");
	document.querySelector('.backend').classList.remove("selected-projects-button");
	document.querySelector('.frontend').classList.remove("selected-projects-button");
	button_choice.classList.add("selected-projects-button");

	let backend_projects = document.querySelectorAll('.backend_projects');
	let frontend_projects = document.querySelectorAll('.frontend_projects');
	if(id === "all") {
		for (var i=0; i < 6; i++) {
			frontend_projects[i].style.display = "block";
			backend_projects[i].style.display = "block";
		}
	}
	else if(id === "frontend") {
		for (var i=0; i <= 6; i++) {
			frontend_projects[i].style.display = "block";
			console.log(i);
			backend_projects[i].style.display = "none";
		}
	}
	
	else if(id === "backend") {
		for (var i=0; i <= 5; i++) {
			frontend_projects[i].style.display = "none";
			backend_projects[i].style.display = "block";
		}
	}
	
}


//Tooltips for skills images
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
$('.skills_icon').tooltip()

//Particle effects
 particlesJS("particles-js",{
  "particles": {
    "number": {
      "value": 40,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#1acfc4"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 1,
        "color": "#1acfc4"
      },
      "polygon": {
        "nb_sides": 5
      }
    },
    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#1acfc4",
      "opacity": 0.4,
      "width": 3
    },
    "move": {
      "enable": true,
      "speed": 3,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": false,
        "mode": "repulse"
      },
      "onclick": {
        "enable": false,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});

