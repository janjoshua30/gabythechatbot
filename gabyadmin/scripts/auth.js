// add admin cloud function
const adminForm = document.querySelector('.admin-actions');
adminForm.addEventListener('submit', (e) => {
  e.preventDefault();

  const adminEmail = document.querySelector('#admin-email').value;
  const addAdminRole = functions.httpsCallable('addAdminRole');
  addAdminRole({ email: adminEmail }).then(result => {
    console.log(result);
  });
});

// listen for auth status changes
auth.onAuthStateChanged(user => {
  if (user) {
    user.getIdTokenResult().then(idTokenResult => {
      user.admin = idTokenResult.claims.admin;
      setupUI(user);
    });
    db.collection('guides').onSnapshot(snapshot => {
      setupGuides(snapshot.docs);
    }, err => console.log(err.message));
  } else {
    setupUI();
    setupGuides([]);
  }
});

// add account
const addAccount = document.querySelector('#signup-form');
addAccount.addEventListener('submit', (e) => {
  e.preventDefault();

  // get user info
  const email = addAccount['signup-email'].value;
  const password = addAccount['signup-password'].value;

  // add account & add firestore data
  auth.createUserWithEmailAndPassword(email, password).then(cred => {
    swal(email, {
      title: "ADDED NEW ACCOUNT!",
      icon: "success",
    });
    return db.collection('users').doc(cred.user.uid).set({
      name: addAccount['signup-bio'].value
    });
  }).then(() => {
    // close the signup modal & reset form
    const modal = document.querySelector('#modal-signup');
    M.Modal.getInstance(modal).close();
    addAccount.reset();
    auth.signOut();
  });
});

// logout
const logout = document.querySelector('#logout');
logout.addEventListener('click', (e) => {
  auth.signOut();
});

// delete
const deleteForm = document.querySelector('#delete-form');
deleteForm.addEventListener('click', (e) => {
  M.Modal.getInstance(deleteForm).close();
  deleteForm.reset();
});

// // cancel
// const cancelForm = document.querySelector('#cancel-form');
// cancelForm.addEventListener('click', (e) => {
//   e.stopPropagation();
//   cancelForm.close();
// });

// login
const errorElement = document.getElementById('error-message');
const loginForm = document.querySelector('#login-form');
loginForm.addEventListener('submit', (e) => {
  e.preventDefault();

  // get user info
  const email = loginForm['login-email'].value;
  const password = loginForm['login-password'].value;

  // log the user in
  auth.signInWithEmailAndPassword(email, password).then((cred) => {
    swal({
      title: "You are now signed in!",
      icon: "success",
    });
    // close the signup modal & reset form
    const modal = document.querySelector('#modal-login');
    M.Modal.getInstance(modal).close();
    loginForm.reset();
  });
  if (email === 'csso@gmail.com') {
    swal({
      title: "ACCESS DENIED!",
      icon: "error",
    });
  }
  if (password !== 'shoutliner123') {
    swal({
      title: "INCORRECT EMAIL OR PASSWORD!",
      icon: "error",
    });
  }
});