document.getElementById('phone').addEventListener('input', function(event) {
    
    let input = event.target.value;
    const cursorPosition = event.target.selectionStart;
    input = input.replace(/\D/g, '');
    
    if (input.length > 10) {
        input = input.slice(0, 10);
    }
    
    event.target.value = input;

    if (cursorPosition <= 10) {
        event.target.setSelectionRange(cursorPosition, cursorPosition);
    }
});