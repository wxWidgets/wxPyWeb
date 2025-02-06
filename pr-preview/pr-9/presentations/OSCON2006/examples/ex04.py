# ex04.py
import wx
import wx.py

class MyFrame(wx.Frame):
    def __init__(self):
        wx.Frame.__init__(self, parent=None, title="Hello World! 3")
        self.pnl = wx.Panel(self)
        self.btn1 = wx.Button(self.pnl, label="Hello")
        self.btn2 = wx.Button(self.pnl, label="World")

        btnSizer = wx.BoxSizer(wx.VERTICAL)
        btnSizer.Add(self.btn1, 0, wx.ALL, 10)
        btnSizer.Add(self.btn2, 0, wx.ALL, 10)

        sizer = wx.BoxSizer()
        sizer.Add(btnSizer, 0, wx.ALL, 25)
        self.pnl.SetSizer(sizer)
        
        self.btn1.Bind(wx.EVT_BUTTON, self.OnHelloWorld1)
        self.btn2.Bind(wx.EVT_BUTTON, self.OnHelloWorld2)
        
        
    def OnHelloWorld1(self, evt):
        wx.MessageBox("'Hello World!' from button 1")

    def OnHelloWorld2(self, evt):
        wx.MessageBox("'Hello World!' from button 2")


class MyApp(wx.App):
    def OnInit(self):
        frame = MyFrame()
        frame.Show()
        self.SetTopWindow(frame)
        
        shell = wx.py.shell.ShellFrame(
            frame, locals={ 'wx': wx, 'frame': frame})
        shell.Show()
        frame.Raise()

        return True

if __name__ == '__main__':
    app = MyApp()
    app.MainLoop()
    
