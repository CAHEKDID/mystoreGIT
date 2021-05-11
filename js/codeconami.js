let authCodePosition = 0;
let auth = ['q','w','e','r','t','y'];
count = 0;
document.body.addEventListener('keydown',function (e) {

  count++;
  current.focus();
  requiredKey = auth[authCodePosition];

  if(e.key === requiredKey)
  {
      authCodePosition++;
      if (authCodePosition)
      {

      }
  }
})