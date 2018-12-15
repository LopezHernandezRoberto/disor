import javax.swing.*;
import java.awt.event.KeyAdapter;
import java.awt.event.KeyEvent;
import java.awt.event.MouseAdapter;
import java.awt.event.MouseEvent;

public class CesarGui extends JDialog {
    private JPanel contentPane;
    private JTextField textField1;
    private JSpinner spinner1;
    private JTextField textField2;
    private JTextField textField3;
    private JSpinner spinner2;
    private JTextArea textArea1;
    private JButton buttonOK;

    public CesarGui() {

        setContentPane(contentPane);
        setModal(true);
        getRootPane().setDefaultButton(buttonOK);

        Agrupacion agrupacion= new Agrupacion();
        Desplazamiento desplazamiento = new Desplazamiento();
        spinner1.setValue(1);
        spinner2.setValue(0);
        textField1.addKeyListener(new KeyAdapter() {
            @Override
            public void keyTyped(KeyEvent e) {
                super.keyTyped(e);
                String textoCifrado = textField1.getText() + e.getKeyChar();
                textField2.setText(desplazamiento.desplazar(textoCifrado, Integer.parseInt(spinner1.getValue().toString())));
                textField3.setText(agrupacion.reverso(textoCifrado));
                textArea1.setText(agrupacion.agrupacionInversa(textoCifrado,Integer.parseInt(spinner2.getValue().toString())));

            }
        });
        textField2.addKeyListener(new KeyAdapter() {
            @Override
            public void keyTyped(KeyEvent e) {
                super.keyTyped(e);
                String textoCifrado = textField2.getText() + e.getKeyChar();
                textField1.setText(desplazamiento.desplazarInversa(textoCifrado, Integer.parseInt(spinner1.getValue().toString())));
                textField3.setText(agrupacion.reverso(textField1.getText()));

                textArea1.setText(agrupacion.agrupacionInversa(textoCifrado,Integer.parseInt(spinner2.getValue().toString())));
            }
        });
        spinner1.addMouseListener(new MouseAdapter() {
            @Override
            public void mouseClicked(MouseEvent e) {
                super.mouseClicked(e);
                String textoCifrado = textField1.getText();
                try {
                    textField2.setText(desplazamiento.desplazar(textoCifrado, Integer.parseInt(spinner1.getValue().toString())));
                } catch (NumberFormatException n) { }
            }
        });
    }

    public static void main(String[] args) {
        CesarGui dialog = new CesarGui();
        dialog.pack();
        dialog.setVisible(true);
        System.exit(0);
    }
}
