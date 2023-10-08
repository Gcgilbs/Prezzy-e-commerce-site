const rangeSlider = document.querySelector('.range-slider');
const minHandle = document.getElementById('minHandle');
const maxHandle = document.getElementById('maxHandle');
const rangeFill = document.getElementById('rangeFill');
const minValue = document.getElementById('minValue');
const maxValue = document.getElementById('maxValue');
const minPriceInput = document.getElementById('minPriceInput');
const maxPriceInput = document.getElementById('maxPriceInput');

const rangeMin = 6800;
const rangeMax = 34800;

minHandle.style.left = '0%';
maxHandle.style.left = '100%';

function formatPrice(price) {
    return price.toLocaleString('en-US');
  }

  function updateValues() {
    const minPercent = parseFloat(minHandle.style.left);
    const maxPercent = parseFloat(maxHandle.style.left);

    const minPrice = Math.round(rangeMin + (rangeMax - rangeMin) * minPercent / 100);
    const maxPrice = Math.round(rangeMin + (rangeMax - rangeMin) * maxPercent / 100);

    minValue.textContent = `${formatPrice(minPrice)}`;
    maxValue.textContent = `${formatPrice(maxPrice)}`;

    const fillWidth = maxPercent - minPercent;
    rangeFill.style.left = minPercent + '%';
    rangeFill.style.width = fillWidth + '%';

    minPriceInput.value = minPrice;
    maxPriceInput.value = maxPrice;
  }

let activeHandle = null;

function handleMove(e) {
    if (!activeHandle) return;

    const rangeWidth = rangeSlider.offsetWidth;
    const handleWidth = activeHandle.offsetWidth;
    const handlePos = e.clientX - rangeSlider.getBoundingClientRect().left - handleWidth / 2;

    let handlePercent = (handlePos / rangeWidth) * 100;

    if (activeHandle === minHandle) {
        const maxPercent = parseFloat(maxHandle.style.left);
        if (handlePercent > maxPercent) {
            handlePercent = maxPercent;
        }
    } else if (activeHandle === maxHandle) {
        const minPercent = parseFloat(minHandle.style.left);
        if (handlePercent < minPercent) {
            handlePercent = minPercent;
        }
    }

    if (handlePercent < 0) {
        handlePercent = 0;
    } else if (handlePercent > 100) {
        handlePercent = 100;
    }

    activeHandle.style.left = handlePercent + '%';

    updateValues();
}

minHandle.addEventListener('mousedown', () => {
    activeHandle = minHandle;
    document.addEventListener('mousemove', handleMove);
});

maxHandle.addEventListener('mousedown', () => {
    activeHandle = maxHandle;
    document.addEventListener('mousemove', handleMove);
});

document.addEventListener('mouseup', () => {
    activeHandle = null;
    document.removeEventListener('mousemove', handleMove);
});

updateValues();

rangeSlider.addEventListener('click', (e) => {
    const rangeWidth = rangeSlider.offsetWidth;
    const clickPos = e.clientX - rangeSlider.getBoundingClientRect().left;

    if (clickPos < 0) {
        minHandle.style.left = '0%';
    } else if (clickPos > rangeWidth) {
        maxHandle.style.left = '100%';
    } else {
        const minPercent = (clickPos / rangeWidth) * 100;
        const maxPercent = (clickPos / rangeWidth) * 100;

        const minHandlePos = parseFloat(minHandle.style.left);
        const maxHandlePos = parseFloat(maxHandle.style.left);

        if (Math.abs(minHandlePos - minPercent) < Math.abs(maxHandlePos - maxPercent)) {
            minHandle.style.left = minPercent + '%';
        } else {
            maxHandle.style.left = maxPercent + '%';
        }
    }

    updateValues();
});


rangeSlider.addEventListener('touchstart', (e) => {
    const touch = e.touches[0];
    handleTouchStart(touch);
});

rangeSlider.addEventListener('touchmove', (e) => {
    const touch = e.touches[0];
    handleTouchMove(touch);
});

rangeSlider.addEventListener('touchend', () => {
    handleTouchEnd();
});

function handleTouchStart(touch) {
    const targetHandle = findClosestHandle(touch.clientX);

    if (targetHandle) {
        activeHandle = targetHandle;
        const handlePos = touch.clientX - rangeSlider.getBoundingClientRect().left;
        const handlePercent = (handlePos / rangeSlider.offsetWidth) * 100;
        activeHandle.style.left = handlePercent + '%';
        updateValues();
    }
}

function handleTouchMove(touch) {
    if (!activeHandle) return;

    const handlePos = touch.clientX - rangeSlider.getBoundingClientRect().left;
    const handlePercent = (handlePos / rangeSlider.offsetWidth) * 100;

    if (activeHandle === minHandle) {
        const maxPercent = parseFloat(maxHandle.style.left);
        if (handlePercent > maxPercent) {
            activeHandle.style.left = maxPercent + '%';
        } else if (handlePercent < 0) {
            activeHandle.style.left = '0%';
        } else {
            activeHandle.style.left = handlePercent + '%';
        }
    } else if (activeHandle === maxHandle) {
        const minPercent = parseFloat(minHandle.style.left);
        if (handlePercent < minPercent) {
            activeHandle.style.left = minPercent + '%';
        } else if (handlePercent > 100) {
            activeHandle.style.left = '100%';
        } else {
            activeHandle.style.left = handlePercent + '%';
        }
    }

    updateValues();
}

function handleTouchEnd() {
    activeHandle = null;
}

function findClosestHandle(clientX) {
    const minHandlePos = minHandle.getBoundingClientRect().left;
    const maxHandlePos = maxHandle.getBoundingClientRect().left;
    const minDist = Math.abs(minHandlePos - clientX);
    const maxDist = Math.abs(maxHandlePos - clientX);

    if (minDist <= maxDist && minDist <= 20) {
        return minHandle;
    } else if (maxDist < minDist && maxDist <= 20) {
        return maxHandle;
    } else {
        return null;
    }
}











