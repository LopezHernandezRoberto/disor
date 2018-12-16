using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace JuegoDeLaVida {
     public partial class Form1 : Form {

          Graphics l;
          Pen pen;

          public Form1() {
               InitializeComponent();
          }

          private void Form1_Load(object sender, EventArgs e) {

          }

          private void Form1_Paint(object sender, PaintEventArgs e) {
               l = e.Graphics;
               pen = new Pen(Color.Black, 2);
               for(int i = 0; i < 800; i = i + 20) {
                    l.DrawLine(pen,i,0,i,400);
                    if(i<=400) l.DrawLine(pen,0,i,800,i);
               }
          }

          private void Form1_MouseDoubleClick(object sender, MouseEventArgs e) {
               Graphics g = this.CreateGraphics();
               System.Drawing.SolidBrush myBrush = new System.Drawing.SolidBrush(System.Drawing.Color.Red);
               pen.Color = Color.White;
               Point p = PointToClient(Cursor.Position);
               //MessageBox.Show(string.Format("X: {0} Y: {1}", p.X,p.Y));
               double x = Math.Truncate(p.X/10.0) % 2 == 0 ? Math.Truncate(p.X / 10.0)*10 : (Math.Truncate(p.X / 10.0)-1)*10;
               double y = Math.Truncate(p.Y / 10.0) % 2 == 0 ? Math.Truncate(p.Y / 10.0) * 10 : (Math.Truncate(p.Y / 10.0) - 1) * 10;
               g.FillRectangle(myBrush, Convert.ToSingle(x), Convert.ToSingle(y), 20, 20);
          }
     }
}
