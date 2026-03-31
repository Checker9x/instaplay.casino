document.addEventListener('DOMContentLoaded', () => {
	// Sticky Header logic
	const header = document.querySelector('.site-header');
	
	window.addEventListener('scroll', () => {
		if (window.scrollY > 50) {
			header.style.background = 'rgba(11, 15, 28, 0.95)';
			header.style.borderBottom = '1px solid rgba(255,255,255,0.05)';
		} else {
			header.style.background = 'var(--bg-glass)';
			header.style.borderBottom = '1px solid rgba(255,255,255,0.05)';
		}
	});

	// Filter Buttons logic (visual only for template)
	const filterBtns = document.querySelectorAll('.filter-btn');
	filterBtns.forEach(btn => {
		btn.addEventListener('click', () => {
			filterBtns.forEach(b => b.classList.remove('active'));
			btn.classList.add('active');
		});
	});

	// Mobile menu mock toggle
	const menuToggle = document.querySelector('.menu-toggle');
	if(menuToggle) {
		menuToggle.addEventListener('click', () => {
			// Add mobile menu display logic here for production
			console.log('Mobile menu toggled');
		});
	}
});
