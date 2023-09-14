describe('Prueba de autenticación ', () => {
    it('Prueba de campos vacíos:', () => {
      cy.visit('http://localhost/telcomundo7');
  
      cy.get('body').click();
      cy.get('[type="submit"]').click();
   
      });
  
    it('Prueba de autenticación exitosa:', () => {
      cy.visit('http://localhost/telcomundo7');
  
      // Ingresa datos válidos en los campos de usuario y contraseña
      cy.get('[type="text"]').type('12');
      cy.get('[type="password"]').type('1234');
  
      // Hacer clic en el botón de inicio de sesión
      cy.get('[type="submit"]').click();
  
      // Comprobar que la URL haya cambiado a la página de redirección correcta
      cy.url().should('eq', 'http://localhost/telcomundo7/Inicio2Analista.php');
    });
  
    it('Prueba de autenticación fallida', () => {
      cy.visit('http://localhost/telcomundo7');
  
      // Ingresa datos inválidos en los campos de usuario y contraseña
      cy.get('[type="text"]').type('11');
      cy.get('[type="password"]').type('123456');
  
      // Hacer clic en el botón de inicio de sesión
      cy.get('[type="submit"]').click();
  

  
    
    })
    });
 
  